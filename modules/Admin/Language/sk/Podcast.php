<?php

declare(strict_types=1);

/**
 * @copyright  2020 Ad Aures
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

return [
    'all_podcasts' => 'Všetky podcasty',
    'no_podcast' => 'Žiadny podcast nenájdený!',
    'create' => 'Vytvoriť podcast',
    'import' => 'Importovať podcast',
    'all_imports' => 'Podcast imports',
    'new_episode' => 'Nová časť',
    'view' => 'Zobraziť podcast',
    'edit' => 'Upraviť podcast',
    'publish' => 'Zverejniť podcast',
    'publish_edit' => 'Upraviť zverejnené',
    'delete' => 'Vymazať podcast',
    'see_episodes' => 'Ukázať časti',
    'see_contributors' => 'Pozrieť prispievateľov',
    'go_to_page' => 'Prejsť na stránku',
    'latest_episodes' => 'Posledné časti',
    'see_all_episodes' => 'Pozrieť všetky časti',
    'draft' => 'Koncept',
    'sync_feed' => 'Synchronize feed',
    'sync_feed_hint' => 'Import this podcast\'s latest episodes',
    'messages' => [
        'createSuccess' => 'Podcast úspešne vytvorený!',
        'editSuccess' => 'Podcast has been successfully updated!',
        'importSuccess' => 'Podcast has been successfully imported!',
        'deleteSuccess' => 'Podcast @{podcast_handle} successfully deleted!',
        'deletePodcastMediaError' => 'Failed to delete podcast {type, select,
            cover {cover}
            banner {banner}
            other {media}
        }.',
        'deleteEpisodeMediaError' => 'Failed to delete podcast episode {episode_slug} {type, select,
            transcript {transcript}
            chapters {chapters}
            image {cover}
            audio {audio}
            other {media}
        }.',
        'deletePodcastMediaFolderError' => 'Failed to delete podcast media folder {folder_path}. You may manually remove it from your disk.',
        'podcastFeedUpdateSuccess' => 'Successful update: {number_of_new_episodes, plural,
            one {# episode was}
            other {# episodes were}
        } added to the podcast!',
        'podcastFeedUpToDate' => 'Podcast už je aktualizovaný.',
        'publishError' => 'This podcast is either already published or scheduled for publication.',
        'publishEditError' => 'This podcast is not scheduled for publication.',
        'publishCancelSuccess' => 'Podcast publication successfully cancelled!',
        'scheduleDateError' => 'Schedule date must be set!',
    ],
    'form' => [
        'identity_section_title' => 'Podcast identity',
        'identity_section_subtitle' => 'These fields allow you to get noticed.',
        'cover' => 'Obal podcastu',
        'cover_size_hint' => 'Cover must be squared and at least 1400px wide and tall.',
        'banner' => 'Podcast banner',
        'banner_size_hint' => 'Banner must have a 3:1 ratio and be at least 1500px wide.',
        'banner_delete' => 'Delete podcast banner',
        'title' => 'Názov',
        'handle' => 'Handle',
        'handle_hint' =>
            'Used to identify the podcast. Uppercase, lowercase, numbers and underscores are accepted.',
        'type' => [
            'label' => 'Typ',
            'episodic' => 'Epizodický',
            'episodic_hint' => 'If episodes are intended to be consumed without any specific order. Newest episodes will be presented first.',
            'serial' => 'Serial',
            'serial_hint' => 'If episodes are intended to be consumed in sequential order. The oldest episodes will be presented first.',
        ],
        'description' => 'Popis',
        'classification_section_title' => 'Zaradenie',
        'classification_section_subtitle' =>
            'These fields will impact your audience and competition.',
        'language' => 'Jazyk',
        'category' => 'Kategória',
        'category_placeholder' => 'Vybrať kategóriu…',
        'other_categories' => 'Ostatné kategórie',
        'parental_advisory' => [
            'label' => 'Parental advisory',
            'hint' => 'Does it contain explicit content?',
            'undefined' => 'undefined',
            'clean' => 'Clean',
            'explicit' => 'Explicit',
        ],
        'author_section_title' => 'Autor',
        'author_section_subtitle' => 'Kto spravuje tento podcast?',
        'owner_name' => 'Meno vlastníka',
        'owner_name_hint' =>
            'For administrative use only. Visible in the public RSS feed.',
        'owner_email' => 'Email vlastníka',
        'owner_email_hint' =>
            'Will be used by most platforms to verify the podcast ownership. Visible in the public RSS feed.',
        'publisher' => 'Vydavateľ',
        'publisher_hint' =>
            'The group responsible for creating the show. Often refers to the parent company or network of a podcast. This field is sometimes labeled as ’Author’.',
        'copyright' => 'Copyright',
        'location_section_title' => 'Umiestnenie',
        'location_section_subtitle' => 'What place is this podcast about?',
        'location_name' => 'Location name or address',
        'location_name_hint' => 'This can be a real place or fictional',
        'monetization_section_title' => 'Monetization',
        'monetization_section_subtitle' =>
            'Earn money thanks to your audience.',
        'premium' => 'Premium',
        'premium_by_default' => 'Episodes must be set as premium by default',
        'premium_by_default_hint' => 'Podcast episodes will be marked as premium by default. You can still choose to set some episodes, trailers or bonuses as public.',
        'op3' => 'Open Podcast Prefix Project (OP3)',
        'op3_hint' => 'Value your analytics data with OP3, an open-source and trusted third party analytics service. Share, validate and compare your analytics data with the open podcasting ecosystem.',
        'op3_enable' => 'Enable OP3 analytics service',
        'op3_enable_hint' => 'For security reasons, premium episodes\' analytics data will not be shared with OP3.',
        'payment_pointer' => 'Payment Pointer for Web Monetization',
        'payment_pointer_hint' =>
            'This is your where you will receive money thanks to Web Monetization',
        'advanced_section_title' => 'Advanced Parameters',
        'advanced_section_subtitle' =>
            'If you need RSS tags that Castopod does not handle, set them here.',
        'custom_rss' => 'Custom RSS tags for the podcast',
        'custom_rss_hint' => 'This will be injected within the ❬channel❭ tag.',
        'new_feed_url' => 'New feed URL',
        'new_feed_url_hint' => 'Use this field when you move to another domain or podcast hosting platform. By default, the value is set to the current RSS URL if the podcast is imported.',
        'old_feed_url' => 'Old feed URL',
        'partnership' => 'Partnership',
        'partner_id' => 'ID',
        'partner_link_url' => 'URL adresa odkazu',
        'partner_image_url' => 'URL adresa obrázka',
        'partner_id_hint' => 'Your own partner ID',
        'partner_link_url_hint' => 'The generic partner link address',
        'partner_image_url_hint' => 'The generic partner image address',
        'status_section_title' => 'Stav',
        'block' => 'Podcast should be hidden from public catalogues',
        'block_hint' =>
            'The podcast show or hide status: toggling this on prevents the entire podcast from appearing in Apple Podcasts, Google Podcasts, and any third party apps that pull shows from these directories. (Not guaranteed)',
        'complete' => 'Podcast will not be having new episodes',
        'lock' => 'Prevent podcast from being copied',
        'lock_hint' =>
            'The purpose is to tell other podcast platforms whether they are allowed to import this feed. A value of yes means that any attempt to import this feed into a new platform should be rejected.',
        'submit_create' => 'Create podcast',
        'submit_edit' => 'Save podcast',
    ],
    'category_options' => [
        'uncategorized' => 'uncategorized',
        'arts' => 'Arts',
        'business' => 'Business',
        'comedy' => 'Comedy',
        'education' => 'Education',
        'fiction' => 'Fiction',
        'government' => 'Government',
        'health_and_fitness' => 'Health &amp Fitness',
        'history' => 'History',
        'kids_and_family' => 'Kids &amp Family',
        'leisure' => 'Leisure',
        'music' => 'Music',
        'news' => 'News',
        'religion_and_spirituality' => 'Religion &amp Spirituality',
        'science' => 'Science',
        'society_and_culture' => 'Society &amp Culture',
        'sports' => 'Sports',
        'technology' => 'Technology',
        'true_crime' => 'True Crime',
        'tv_and_film' => 'TV &amp Film',
        'books' => 'Books',
        'design' => 'Design',
        'fashion_and_beauty' => 'Fashion &amp Beauty',
        'food' => 'Food',
        'performing_arts' => 'Performing Arts',
        'visual_arts' => 'Visual Arts',
        'careers' => 'Careers',
        'entrepreneurship' => 'Podnikateľský',
        'investing' => 'Investičný',
        'management' => 'Management',
        'marketing' => 'Marketing',
        'non_profit' => 'Neziskový',
        'comedy_interviews' => 'Comedy Interviews',
        'improv' => 'Improv',
        'stand_up' => 'Stand-Up',
        'courses' => 'Kurzy',
        'how_to' => 'How To',
        'language_learning' => 'Language Learning',
        'self_improvement' => 'Self-Improvement',
        'comedy_fiction' => 'Comedy Fiction',
        'drama' => 'Drama',
        'science_fiction' => 'Science Fiction',
        'alternative_health' => 'Alternative Health',
        'fitness' => 'Fitness',
        'medicine' => 'Medicínsky',
        'mental_health' => 'Mental Health',
        'nutrition' => 'Nutrition',
        'sexuality' => 'Sexualita',
        'education_for_kids' => 'Education for Kids',
        'parenting' => 'Parenting',
        'pets_and_animals' => 'Pets &amp Animals',
        'stories_for_kids' => 'Príbehy pre deti',
        'animation_and_manga' => 'Animation &amp Manga',
        'automotive' => 'Automotive',
        'aviation' => 'Aviation',
        'crafts' => 'Crafts',
        'games' => 'Games',
        'hobbies' => 'Hobbies',
        'home_and_garden' => 'Home &amp Garden',
        'video_games' => 'Video Games',
        'music_commentary' => 'Music Commentary',
        'music_history' => 'Music History',
        'music_interviews' => 'Music Interviews',
        'business_news' => 'Business News',
        'daily_news' => 'Daily News',
        'entertainment_news' => 'Entertainment News',
        'news_commentary' => 'News Commentary',
        'politics' => 'Politics',
        'sports_news' => 'Sports News',
        'tech_news' => 'Tech News',
        'buddhism' => 'Buddhism',
        'christianity' => 'Christianity',
        'hinduism' => 'Hinduism',
        'islam' => 'Islam',
        'judaism' => 'Judaism',
        'religion' => 'Religion',
        'spirituality' => 'Spirituality',
        'astronomy' => 'Astronomy',
        'chemistry' => 'Chemistry',
        'earth_sciences' => 'Earth Sciences',
        'life_sciences' => 'Life Sciences',
        'mathematics' => 'Mathematics',
        'natural_sciences' => 'Natural Sciences',
        'nature' => 'Príroda',
        'physics' => 'Fyzika',
        'social_sciences' => 'Social Sciences',
        'documentary' => 'Dokumentárny',
        'personal_journals' => 'Personal Journals',
        'philosophy' => 'Filozofia',
        'places_and_travel' => 'Places &amp Travel',
        'relationships' => 'Vzťahy',
        'baseball' => 'Baseball',
        'basketball' => 'Basketball',
        'cricket' => 'Cricket',
        'fantasy_sports' => 'Fantasy Sports',
        'football' => 'Football',
        'golf' => 'Golf',
        'hockey' => 'Hockey',
        'rugby' => 'Rugby',
        'running' => 'Running',
        'soccer' => 'Soccer',
        'swimming' => 'Plávanie',
        'tennis' => 'Tenis',
        'volleyball' => 'Volleyball',
        'wilderness' => 'Divočina',
        'wrestling' => 'Zápasnícky',
        'after_shows' => 'After Shows',
        'film_history' => 'Filmová história',
        'film_interviews' => 'Filmové rozhovory',
        'film_reviews' => 'Filmové recenzie',
        'tv_reviews' => 'TV recenzie',
    ],
    'publish_form' => [
        'back_to_podcast_dashboard' => 'Späť na podcastovú nástenku',
        'post' => 'Your announcement post',
        'post_hint' =>
            "Write a message to announce the publication of your podcast. The message will be featured in your podcast's homepage.",
        'message_placeholder' => 'Write your message…',
        'submit' => 'Publish',
        'publication_date' => 'Publication date',
        'publication_method' => [
            'now' => 'Now',
            'schedule' => 'Schedule',
        ],
        'scheduled_publication_date' => 'Scheduled publication date',
        'scheduled_publication_date_hint' =>
            'You can schedule the podcast release by setting a future publication date. This field must be formatted as YYYY-MM-DD HH:mm',
        'submit_edit' => 'Edit publication',
        'cancel_publication' => 'Cancel publication',
        'message_warning' => 'You did not write a message for your announcement post!',
        'message_warning_hint' => 'Having a message increases social engagement, resulting in a better visibility for your podcast.',
        'message_warning_submit' => 'Publish anyway',
    ],
    'publication_status_banner' => [
        'draft_mode' => 'draft mode',
        'not_published' => 'This podcast is not yet published.',
        'scheduled' => 'This podcast is scheduled for publication on {publication_date}.',
    ],
    'delete_form' => [
        'disclaimer' =>
            "Deleting the podcast will delete all episodes, media files, posts and analytics associated with it. This action is irreversible, you will not be able to retrieve them afterwards.",
        'understand' => 'I understand, I want the podcast to be permanently deleted',
        'submit' => 'Delete',
    ],
    'by' => 'By {publisher}',
    'season' => 'Season {seasonNumber}',
    'list_of_episodes_year' => '{year} episodes ({episodeCount})',
    'list_of_episodes_season' =>
        'Season {seasonNumber} episodes ({episodeCount})',
    'no_episode' => 'No episode found!',
    'follow' => 'Follow',
    'followers' => '{numberOfFollowers, plural,
        one {# follower}
        other {# followers}
    }',
    'posts' => '{numberOfPosts, plural,
        one {# post}
        other {# posts}
    }',
    'activity' => 'Activity',
    'episodes' => 'Episodes',
    'sponsor' => 'Sponsor',
    'funding_links' => 'Funding links for {podcastTitle}',
    'find_on' => 'Find {podcastTitle} on',
    'listen_on' => 'Listen on',
];
