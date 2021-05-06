<?php

/**
 * @copyright  2021 Podlibre
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

namespace ActivityPub\Entities;

use RuntimeException;
use Michalsn\Uuid\UuidEntity;

class Note extends UuidEntity
{
    /**
     * @var string[]
     */
    protected $uuids = ['id', 'in_reply_to_id', 'reblog_of_id'];

    /**
     * @var Actor
     */
    protected $actor;

    /**
     * @var boolean
     */
    protected $is_reply = false;

    /**
     * @var Note
     */
    protected $reply_to_note;

    /**
     * @var boolean
     */
    protected $is_reblog = false;

    /**
     * @var Note
     */
    protected $reblog_of_note;

    /**
     * @var PreviewCard|null
     */
    protected $preview_card;

    /**
     * @var boolean
     */
    protected $has_preview_card = false;

    /**
     * @var Note[]
     */
    protected $replies = [];

    /**
     * @var boolean
     */
    protected $has_replies = false;

    /**
     * @var Note[]
     */
    protected $reblogs = [];

    /**
     * @var string[]
     */
    protected $dates = ['published_at', 'created_at'];

    /**
     * @var array<string, string>
     */
    protected $casts = [
        'id' => 'string',
        'uri' => 'string',
        'actor_id' => 'integer',
        'in_reply_to_id' => '?string',
        'reblog_of_id' => '?string',
        'message' => 'string',
        'message_html' => 'string',
        'favourites_count' => 'integer',
        'reblogs_count' => 'integer',
        'replies_count' => 'integer',
    ];

    /**
     * Returns the note's actor
     */
    public function getActor(): Actor
    {
        if (empty($this->actor_id)) {
            throw new RuntimeException(
                'Note must have an actor_id before getting actor.',
            );
        }

        if (empty($this->actor)) {
            $this->actor = model('ActorModel')->getActorById($this->actor_id);
        }

        return $this->actor;
    }

    public function getPreviewCard(): ?PreviewCard
    {
        if (empty($this->id)) {
            throw new RuntimeException(
                'Note must be created before getting preview_card.',
            );
        }

        if (empty($this->preview_card)) {
            $this->preview_card = model('PreviewCardModel')->getNotePreviewCard(
                $this->id,
            );
        }

        return $this->preview_card;
    }

    public function getHasPreviewCard(): bool
    {
        return !empty($this->getPreviewCard());
    }

    public function getIsReply(): bool
    {
        $this->is_reply = $this->in_reply_to_id !== null;

        return $this->is_reply;
    }

    /**
     * @return Note[]
     */
    public function getReplies(): array
    {
        if (empty($this->id)) {
            throw new RuntimeException(
                'Note must be created before getting replies.',
            );
        }

        if (empty($this->replies)) {
            $this->replies = (array) model('NoteModel')->getNoteReplies(
                $this->id,
            );
        }

        return $this->replies;
    }

    public function getHasReplies(): bool
    {
        return !empty($this->getReplies());
    }

    public function getReplyToNote(): Note
    {
        if (empty($this->in_reply_to_id)) {
            throw new RuntimeException('Note is not a reply.');
        }

        if (empty($this->reply_to_note)) {
            $this->reply_to_note = model('NoteModel')->getNoteById(
                $this->in_reply_to_id,
            );
        }

        return $this->reply_to_note;
    }

    /**
     * @return Note[]
     */
    public function getReblogs(): array
    {
        if (empty($this->id)) {
            throw new RuntimeException(
                'Note must be created before getting reblogs.',
            );
        }

        if (empty($this->reblogs)) {
            $this->reblogs = (array) model('NoteModel')->getNoteReblogs(
                $this->id,
            );
        }

        return $this->reblogs;
    }

    public function getIsReblog(): bool
    {
        return $this->reblog_of_id != null;
    }

    public function getReblogOfNote(): Note
    {
        if (empty($this->reblog_of_id)) {
            throw new RuntimeException('Note is not a reblog.');
        }

        if (empty($this->reblog_of_note)) {
            $this->reblog_of_note = model('NoteModel')->getNoteById(
                $this->reblog_of_id,
            );
        }

        return $this->reblog_of_note;
    }

    public function setMessage(string $message): self
    {
        helper('activitypub');

        $messageWithoutTags = strip_tags($message);

        $this->attributes['message'] = $messageWithoutTags;
        $this->attributes['message_html'] = str_replace(
            "\n",
            '<br />',
            linkify($messageWithoutTags),
        );

        return $this;
    }
}
