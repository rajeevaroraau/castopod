<?php

declare(strict_types=1);

/**
 * @copyright  2020 Ad Aures
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

return [
    'all_podcasts' => 'Alle podkastar',
    'no_podcast' => 'Fann ingen podkast!',
    'create' => 'Lag ein podcast',
    'import' => 'Importer ein podkast',
    'all_imports' => 'Podkast-importar',
    'new_episode' => 'Ny episode',
    'view' => 'Sjå podkasten',
    'edit' => 'Rediger podkasten',
    'publish' => 'Legg ut podkasten',
    'publish_edit' => 'Rediger publiseringa',
    'delete' => 'Slett podkasten',
    'see_episodes' => 'Sjå episodane',
    'see_contributors' => 'Sjå bidragsytarane',
    'monetization_other' => 'Other monetization',
    'go_to_page' => 'Gå til side',
    'latest_episodes' => 'Dei nyaste episodane',
    'see_all_episodes' => 'Sjå alle episodane',
    'draft' => 'Kladd',
    'messages' => [
        'createSuccess' => 'Podkasten er oppretta!',
        'editSuccess' => 'Podkasten er oppdatert!',
        'importSuccess' => 'Podkasten er importert!',
        'deleteSuccess' => 'Podkasten @{podcast_handle} vart sletta.',
        'deletePodcastMediaError' => 'Greidde ikkje sletta {type, select,
            cover {omslaget}
            banner {banneret}
            other {media}
        } til podkasten.',
        'deleteEpisodeMediaError' => 'Greidde ikkje sletta {type, select,
            transcript {transkripsjonen}
            chapters {kapittel}
            image {omslag}
            audio {lyd}
            other {media}
        } frå {episode_slug}.',
        'deletePodcastMediaFolderError' => 'Greidde ikkje sletta mediemappa {folder_path} for podkasten. Du kan sletta mappa manuelt.',
        'podcastFeedUpdateSuccess' => 'Vellukka oppdatering: {number_of_new_episodes, plural,
            one {# episode vart lagt}
            other {# episodar vart lagde}
        } til podkasten!',
        'podcastFeedUpToDate' => 'Podkasten er allereie oppdatert.',
        'publishError' => 'Denne podkasten er allereie lagt ut eller planlagt for offentleggjering.',
        'publishEditError' => 'Denne podkasten er ikkje planlagt publisert.',
        'publishCancelSuccess' => 'Du har avbrote å leggja ut podkasten.',
        'scheduleDateError' => 'Du må velja publiseringsdato.',
    ],
    'form' => [
        'identity_section_title' => 'Podkastidentitet',
        'identity_section_subtitle' => 'Desse felta gjer at du blir lagt merke til.',
        'fediverse_section_title' => 'Fediverse identity',

        'cover' => 'Podkastomslag',
        'cover_size_hint' => 'Omslaget må vera kvadratisk, og minst 1400pkt breitt og høgt.',
        'banner' => 'Podkastbanner',
        'banner_size_hint' => 'Banneret må ha 3:1-forhold og vera minst 1500pkt breitt.',
        'banner_delete' => 'Slett podkastbanneret',
        'title' => 'Tittel',
        'handle' => 'Handtak',
        'handle_hint' =>
            'Blir brukt til å identifisera podkasten. Du kan bruka store og små bokstavar, tal og understrek.',
        'type' => [
            'label' => 'Type',
            'episodic' => 'Med episodar',
            'episodic_hint' => 'Viss det er meininga at episodane skal kunna lyttast til uansett rekkjefylgje. Dei nyaste episodane blir presenterte fyrst.',
            'serial' => 'I serie',
            'serial_hint' => 'If episodes are intended to be consumed in sequential order. Episodes will be presented in numeric order.',
        ],
        'medium' => [
            'label' => 'Medium',
            'hint' => 'Medium as represented by podcast:medium tag in RSS. Changing this may change how players present your feed.',
            'podcast' => 'Podcast',
            'podcast_hint' => 'Describes a feed for a podcast show.',
            'music' => 'Music',
            'music_hint' => 'A feed of music organized into an "album" with each item a song within the album.',
            'audiobook' => 'Audiobook',
            'audiobook_hint' => 'Specific types of audio with one item per feed, or where items represent chapters within the book.',
        ],
        'description' => 'Skildring',
        'classification_section_title' => 'Klassifisering',
        'classification_section_subtitle' =>
            'Desse felta vil påverka publikummet og konkurransen din.',
        'language' => 'Språk',
        'category' => 'Kategori',
        'category_placeholder' => 'Vel ein kategori…',
        'other_categories' => 'Andre kategoriar',
        'parental_advisory' => [
            'label' => 'Råd til foreldre',
            'hint' => 'Er det grov prat her?',
            'undefined' => 'udefinert',
            'clean' => 'Familievenleg',
            'explicit' => 'Grovt',
        ],
        'author_section_title' => 'Forfattar',
        'author_section_subtitle' => 'Kven styrer podkasten?',
        'owner_name' => 'Namn på eigaren',
        'owner_name_hint' =>
            'Berre til administrativ bruk. Synleg i den offentlege RSS-straumen.',
        'owner_email' => 'Epost til eigaren',
        'owner_email_hint' =>
            'Blir brukt av dei fleste plattformer til å stadfesta eigarskapen til podkasten. Synleg i den offentlege RSS-straumen.',
        'is_owner_email_removed_from_feed' => 'Remove the owner email from the public RSS feed',
        'is_owner_email_removed_from_feed_hint' => 'You may need to temporarily unhide the email so that a directory can verify your podcast ownership.',
        'publisher' => 'Utgjevar',
        'publisher_hint' =>
            'Gruppa som er ansvarleg for serien. Det er vanlegvis morselskapet eller nettverket til ein podkast. Dette feltet er stundom merka med «forfattar».',
        'copyright' => 'Opphavsrett',
        'location_section_title' => 'Stad',
        'location_section_subtitle' => 'Kva stad handlar denne podkasten om?',
        'location_name' => 'Stadnamn eller adresse',
        'location_name_hint' => 'Dette kan vera ein verkeleg eller oppdikta stad',
        'monetization_section_title' => 'Kommersialisering',
        'monetization_section_subtitle' =>
            'Ten pengar med hjelp frå publikummet ditt.',
        'premium' => 'Premium',
        'premium_by_default' => 'Episodane må ha premium som standardval',
        'premium_by_default_hint' => 'Podkastepisodane vil få premium som standardmerking. Du kan likevel ha nokre episodar, trailerar eller bonusar som offentlege.',
        'op3' => 'Open Podcast Prefix-prosjekt (OP3)',
        'op3_link' => 'Visit your OP3 dashboard (external link)',
        'op3_hint' => 'Verdiset analysedataa dine med OP3, som er ein tredjeparts analyseteneste med open kjeldekode. Del, stadfest og samanlikne analysedataa dine med det opne podkast-økosystemet.',
        'op3_enable' => 'Bruk OP3-analysetenesta',
        'op3_enable_hint' => 'Av tryggleiksgrunnar deler me ikkje analysedata for premium-episodar med OP3.',
        'payment_pointer' => 'Betalingspunkt for nettkommersialisering',
        'payment_pointer_hint' =>
            'Det er her du vil få inn pengar frå nettkommersialiseringa',
        'advanced_section_title' => 'Avanserte innstillingar',
        'advanced_section_subtitle' =>
            'Viss du treng RSS-merkelappar som Castopod ikkje handterer, kan du skriva dei inn her.',
        'custom_rss' => 'Eigne RSS-merkelappar for podkasten',
        'custom_rss_hint' => 'Dette blir sett inn i ❬channel❭-elementet.',
        'new_feed_url' => 'Ny straum-URL',
        'new_feed_url_hint' => 'Bruk dette feltet når du flyttar til eit anna domene eller vertsplattform. Standardvalet for verdien er den noverande RSS-adresse viss podkasten er importert.',
        'old_feed_url' => 'Gamal straum-URL',
        'partnership' => 'Partnarskap',
        'partner_id' => 'ID',
        'partner_link_url' => 'Lenke-URL',
        'partner_image_url' => 'Bilet-URL',
        'partner_id_hint' => 'Din eigen partnar-ID',
        'partner_link_url_hint' => 'Lenkeadressa til den generelle partnaren',
        'partner_image_url_hint' => 'Biletadressa til den generelle partnaren',
        'block' => 'Podkasten skal gøymast frå offentlege katalogar',
        'block_hint' =>
            'Vis- eller gøym- status for podkasten: Dersom du skrur på dette, hindrar det heile podkasten frå å syna i Apple podcasts, Google podcasts og andre tredjeparts-appar som hentar podkastar frå desse (men ingen garanti)',
        'complete' => 'Podkasten vil ikkje få fleire episodar',
        'lock' => 'Hindre at podkasten blir kopiert',
        'lock_hint' =>
            'Føremålet er å fortelja andre podkastplattformer om dei kan importera denne straumen. Dersom verdien er ja, blir alle forsøk på å importera denne straumen til ei ny plattform nekta.',
        'submit_create' => 'Lag podkast',
        'submit_edit' => 'Lagre podkasten',
    ],
    'category_options' => [
        'uncategorized' => 'ukategorisert',
        'arts' => 'Kunst',
        'business' => 'Forretningar',
        'comedy' => 'Komedie',
        'education' => 'Utdanning',
        'fiction' => 'Fiksjon',
        'government' => 'Styresmakter',
        'health_and_fitness' => 'Helse og trening',
        'history' => 'Historie',
        'kids_and_family' => 'Born &amp familie',
        'leisure' => 'Fritid',
        'music' => 'Musikk',
        'news' => 'Nytt',
        'religion_and_spirituality' => 'Religion &amp spiritualitet',
        'science' => 'Vitskap',
        'society_and_culture' => 'Samfunn &amp kultur',
        'sports' => 'Idrett',
        'technology' => 'Teknologi',
        'true_crime' => 'Sann krim',
        'tv_and_film' => 'TV &amp film',
        'books' => 'Bøker',
        'design' => 'Design',
        'fashion_and_beauty' => 'Mote &amp venleik',
        'food' => 'Mat',
        'performing_arts' => 'Utøvande kunst',
        'visual_arts' => 'Visuell kunst',
        'careers' => 'Karriere',
        'entrepreneurship' => 'Entreprenørskap',
        'investing' => 'Investering',
        'management' => 'Leiing',
        'marketing' => 'Marknadsføring',
        'non_profit' => 'Friviljug arbeid',
        'comedy_interviews' => 'Humor-intervju',
        'improv' => 'Improvisasjon',
        'stand_up' => 'Ståkomikk',
        'courses' => 'Kurs',
        'how_to' => 'Slik gjer du',
        'language_learning' => 'Språklæring',
        'self_improvement' => 'Sjølvforbetring',
        'comedy_fiction' => 'Oppdikta humor',
        'drama' => 'Drama',
        'science_fiction' => 'Science Fiction',
        'alternative_health' => 'Alternativ helse',
        'fitness' => 'Kom i form',
        'medicine' => 'Medisin',
        'mental_health' => 'Mental helse',
        'nutrition' => 'Næring',
        'sexuality' => 'Seksualitet',
        'education_for_kids' => 'Utdanning for born',
        'parenting' => 'Oppseding',
        'pets_and_animals' => 'Kjæledyr &amp dyr',
        'stories_for_kids' => 'Historier for born',
        'animation_and_manga' => 'Animasjon &amp manga',
        'automotive' => 'Bil og motor',
        'aviation' => 'Luftfart',
        'crafts' => 'Handverk',
        'games' => 'Spel',
        'hobbies' => 'Hobbyar',
        'home_and_garden' => 'Heim og hage',
        'video_games' => 'Videospel',
        'music_commentary' => 'Musikkommentarar',
        'music_history' => 'Musikkhistorie',
        'music_interviews' => 'Musikkintervju',
        'business_news' => 'Handelsnytt',
        'daily_news' => 'Dagleg nytt',
        'entertainment_news' => 'Underhaldningsnytt',
        'news_commentary' => 'Kommentarar til nyhende',
        'politics' => 'Politikk',
        'sports_news' => 'Sportsnytt',
        'tech_news' => 'Teknologinytt',
        'buddhism' => 'Buddhisme',
        'christianity' => 'Kristendom',
        'hinduism' => 'Hinduisme',
        'islam' => 'Islam',
        'judaism' => 'Jødedom',
        'religion' => 'Religion',
        'spirituality' => 'Spiritualitet',
        'astronomy' => 'Astronomi',
        'chemistry' => 'Kjemi',
        'earth_sciences' => 'Geofag',
        'life_sciences' => 'Humaniora',
        'mathematics' => 'Matematikk',
        'natural_sciences' => 'Naturvitskap',
        'nature' => 'Natur',
        'physics' => 'Fysisk',
        'social_sciences' => 'Sosialfag',
        'documentary' => 'Dokumentar',
        'personal_journals' => 'Personlege journalar',
        'philosophy' => 'Filosofi',
        'places_and_travel' => 'Stader &amp reise',
        'relationships' => 'Forhold',
        'baseball' => 'Baseball',
        'basketball' => 'Basketball',
        'cricket' => 'Cricket',
        'fantasy_sports' => 'Fantasiidrettar',
        'football' => 'Fotball',
        'golf' => 'Golf',
        'hockey' => 'Hockey',
        'rugby' => 'Rugby',
        'running' => 'Springing',
        'soccer' => 'Fotball',
        'swimming' => 'Symjing',
        'tennis' => 'Tennis',
        'volleyball' => 'Volleyball',
        'wilderness' => 'Villmark',
        'wrestling' => 'Bryting',
        'after_shows' => 'Etterprogram',
        'film_history' => 'Filmhistorie',
        'film_interviews' => 'Filmintervju',
        'film_reviews' => 'Filmmeldingar',
        'tv_reviews' => 'TV-meldingar',
    ],
    'publish_form' => [
        'back_to_podcast_dashboard' => 'Tilbake til podkast-styringspanelet',
        'post' => 'Kunngjeringsinnlegget ditt',
        'post_hint' =>
            "Skriv ei melding for å kunngjera at du legg ut podkasten. Dette vil stå på hiemesida til podkasten din.",
        'message_placeholder' => 'Skriv kunngjeringa di…',
        'submit' => 'Legg ut',
        'publication_date' => 'Publiseringsdato',
        'publication_method' => [
            'now' => 'No',
            'schedule' => 'Tidsplan',
        ],
        'scheduled_publication_date' => 'Planlagd publiseringsdato',
        'scheduled_publication_date_hint' =>
            'Du kan planleggja å offengleggjera podkasten seinare ved å skriva inn eit publiseringstidspunkt. Feltet må vera i formatet ÅÅÅÅ-MM-DD HH:mm',
        'submit_edit' => 'Rediger publiseringa',
        'cancel_publication' => 'Avbryt publisering',
        'message_warning' => 'Du skreiv inga melding til kunngjeringsinnlegget ditt!',
        'message_warning_hint' => 'Viss du skriv ei melding, kan det gje meir sosialt engasjement og syta for at podkasten din blir meir synleg.',
        'message_warning_submit' => 'Legg ut likevel',
    ],
    'publication_status_banner' => [
        'draft_mode' => 'kladdemodus',
        'not_published' => 'Denne podkasten er ikkje lagt ut enno.',
        'scheduled' => 'Denne podkasten er planlagt for utgjeving {publication_date}.',
    ],
    'delete_form' => [
        'disclaimer' =>
            "Viss du slettar podkasten, vil det sletta alle episodar, mediafiler, innlegg og analyse som høyrer til. Du kan ikkje angra dette, og vil ikkje få det tilbake etterpå.",
        'understand' => 'Eg forstår, og vil sletta podkasten for alltid',
        'submit' => 'Slett',
    ],
    'by' => 'Av {publisher}',
    'season' => 'Sesong {seasonNumber}',
    'list_of_episodes_year' => '{year}-episodar ({episodeCount})',
    'list_of_episodes_season' =>
        'Sesong {seasonNumber}-episodar ({episodeCount})',
    'no_episode' => 'Fann ingen episode!',
    'follow' => 'Fylg',
    'followers' => '{numberOfFollowers, plural,
        one {# fylgjar}
        other {# fylgjarar}
    }',
    'posts' => '{numberOfPosts, plural,
        one {# innlegg}
        other {# innlegg}
    }',
    'activity' => 'Aktivitet',
    'episodes' => 'Episodar',
    'sponsor' => 'Sponsor',
    'funding_links' => 'Finansieringslenker for {podcastTitle}',
    'find_on' => 'Finn {podcastTitle} på',
    'listen_on' => 'Høyr på',
];
