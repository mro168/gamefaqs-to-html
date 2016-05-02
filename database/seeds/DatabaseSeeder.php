<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Article;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UserTableSeeder::class);
        $this->call(ArticleTableSeeder::class);

        Model::reguard();
    }
}

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create([
          'name'      => env('AUTHORIZED_USER_NAME', 'somebody'),
          'email'     => env('AUTHORIZED_USER_EMAIL', 'email@example.com'),
          'password'  => bcrypt(env('AUTHORIZED_USER_PASSWORD', 'secret'))
          ]);
    }

}

class ArticleTableSeeder extends Seeder {

    public function run()
    {
        DB::table('articles')->delete();

        // I) Main Walkthrough
        Article::create([
          'slug'    => 'home',
          'title'   => 'Home',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/001-home.txt'),
        ]);
        Article::create([
          'slug'    => 'introduction',
          'title'   => 'Introduction',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/002-introduction.txt'),
        ]);
        Article::create([
          'slug'    => 'table-of-contents',
          'title'   => 'Table Of Contents',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/003-table-of-contents.txt'),
        ]);
        Article::create([
          'slug'    => 'default-controls-and-general-tips',
          'title'   => 'Default Controls and general tips',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/004-default-controls-and-general-tips.txt'),
        ]);
        Article::create([
          'slug'    => 'the-reactor-1-raid',
          'title'   => 'The Reactor #1 raid',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/005-the-reactor-1-raid.txt'),
        ]);
        Article::create([
          'slug'    => 'sector-7-at-the-hideout',
          'title'   => 'Sector 7: At the hideout',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/006-sector-7-at-the-hideout.txt'),
        ]);
        Article::create([
          'slug'    => 'the-second-raid-reactor-5',
          'title'   => 'The second raid: Reactor #5',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/007-the-second-raid-reactor-5.txt'),
        ]);
        Article::create([
          'slug'    => 'aeris-the-flower-girl',
          'title'   => 'Aeris the flower girl',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/008-aeris-the-flower-girl.txt'),
        ]);
        Article::create([
          'slug'    => 'cross-dressing-at-wall-market',
          'title'   => 'Cross dressing at Wall Market',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/009-cross-dressing-at-wall-market.txt'),
        ]);
        Article::create([
          'slug'    => 'sewers-train-graveyard-and-pillar-assault',
          'title'   => 'Sewers, Train Graveyard, and Pillar Assault',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/010-sewers-train-graveyard-and-pillar-assault.txt'),
        ]);
        Article::create([
          'slug'    => 'back-in-the-slums',
          'title'   => 'Back in the slums',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/011-back-in-the-slums.txt'),
        ]);
        Article::create([
          'slug'    => 'raiding-shinra-hq',
          'title'   => 'Raiding Shinra HQ!',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/012-raiding-shinra-hq.txt'),
        ]);
        Article::create([
          'slug'    => 'flashback-at-kalm-town',
          'title'   => 'Flashback at Kalm Town',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/013-flashback-at-kalm-town.txt'),
        ]);
        Article::create([
          'slug'    => 'chocobo-ranch-the-marshes-and-the-mythril-mines',
          'title'   => 'Chocobo Ranch, the Marshes, and the Mythril Mines',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/014-chocobo-ranch-the-marshes-and-the-mythril-mines.txt'),
        ]);
        Article::create([
          'slug'    => 'junon',
          'title'   => 'Junon',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/015-junon.txt'),
        ]);
        Article::create([
          'slug'    => 'to-sunny-places',
          'title'   => 'To sunny places!',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/016-to-sunny-places.txt'),
        ]);
        Article::create([
          'slug'    => 'mount-corel',
          'title'   => 'Mount Corel',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/017-mount-corel.txt'),
        ]);
        Article::create([
          'slug'    => 'the-gold-saucer-and-corel-prison',
          'title'   => 'The Gold Saucer and Corel Prison',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/018-the-gold-saucer-and-corel-prison.txt'),
        ]);
        Article::create([
          'slug'    => 'optional-fun-with-the-buggy',
          'title'   => 'Optional: Fun with the Buggy',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/019-optional-fun-with-the-buggy.txt'),
        ]);
        Article::create([
          'slug'    => 'gongaga-village',
          'title'   => 'Gongaga Village',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/020-gongaga-village.txt'),
        ]);
        Article::create([
          'slug'    => 'cosmo-canyon-and-cave-of-the-gi',
          'title'   => 'Cosmo Canyon & Cave of the Gi',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/021-cosmo-canyon-and-cave-of-the-gi.txt'),
        ]);
        Article::create([
          'slug'    => 'nibelheim-and-shinra-mansion',
          'title'   => 'Nibelheim & Shinra Mansion',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/022-nibelheim-and-shinra-mansion.txt'),
        ]);
        Article::create([
          'slug'    => 'mount-nibel',
          'title'   => 'Mount Nibel',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/023-mount-nibel.txt'),
        ]);
        Article::create([
          'slug'    => 'rocket-town',
          'title'   => 'Rocket Town',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/024-rocket-town.txt'),
        ]);
        Article::create([
          'slug'    => 'optional-things-with-the-tiny-bronco',
          'title'   => 'Optional things with the Tiny Bronco',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/025-optional-things-with-the-tiny-bronco.txt'),
        ]);
        Article::create([
          'slug'    => 'wutai',
          'title'   => '{OPT-2} Wutai',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/026-wutai.txt'),
        ]);
        Article::create([
          'slug'    => 'the-wutai-pagoda',
          'title'   => '{OPT-3} The Wutai Pagoda',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/027-the-wutai-pagoda.txt'),
        ]);
        Article::create([
          'slug'    => 'the-keystone-and-the-date',
          'title'   => 'The Keystone and the Date',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/028-the-keystone-and-the-date.txt'),
        ]);
        Article::create([
          'slug'    => 'the-temple-of-the-ancients',
          'title'   => 'The Temple of the Ancients',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/029-the-temple-of-the-ancients.txt'),
        ]);
        Article::create([
          'slug'    => 'bone-village-the-sleeping-forest-and-city-of-the-ancients',
          'title'   => 'Bone Village, The Sleeping Forest & City of the Ancients',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/030-bone-village-the-sleeping-forest-and-city-of-the-ancients.txt'),
        ]);
        Article::create([
          'slug'    => 'coral-valley-cave-and-icicle-inn',
          'title'   => 'Coral Valley Cave & Icicle Inn',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/031-coral-valley-cave-and-icicle-inn.txt'),
        ]);
        Article::create([
          'slug'    => 'the-great-glacier',
          'title'   => 'The Great Glacier',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/032-the-great-glacier.txt'),
        ]);
        Article::create([
          'slug'    => 'gaea-cliffs',
          'title'   => 'Gaea\'s Cliffs',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/033-gaea-cliffs.txt'),
        ]);
        Article::create([
          'slug'    => 'whirlwind-maze',
          'title'   => 'Whirlwind Maze',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/034-whirlwind-maze.txt'),
        ]);
        Article::create([
          'slug'    => 'escape-from-junon',
          'title'   => 'Escape from Junon',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/035-escape-from-junon.txt'),
        ]);
        Article::create([
          'slug'    => 'flying-high-optional-thins-with-the-highwind',
          'title'   => 'Flying High: Optional things with the Highwind',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/036-flying-high-optional-thins-with-the-highwind.txt'),
        ]);
        Article::create([
          'slug'    => 'mideel',
          'title'   => 'Mideel',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/037-mideel.txt'),
        ]);
        Article::create([
          'slug'    => 'the-huge-materia-corel-and-fort-condor',
          'title'   => 'The Huge Materia: Corel and Fort Condor',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/038-the-huge-materia-corel-and-fort-condor.txt'),
        ]);
        Article::create([
          'slug'    => 'cloud-at-mideel-more-optional-things',
          'title'   => 'Cloud at Mideel + More optional things',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/039-cloud-at-mideel-more-optional-things.txt'),
        ]);
        Article::create([
          'slug'    => 'the-underwater-reactor',
          'title'   => 'The Underwater Reactor',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/040-the-underwater-reactor.txt'),
        ]);
        Article::create([
          'slug'    => 'the-gelnika-and-other-optional-things',
          'title'   => 'The Gelnika and other optional things',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/041-the-gelnika-and-other-optional-things.txt'),
        ]);
        Article::create([
          'slug'    => 'a-space-odyssey-1997',
          'title'   => 'A Space Odyssey 1997',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/042-a-space-odyssey-1997.txt'),
        ]);
        Article::create([
          'slug'    => 'the-key-to-the-ancients-diamond-weapon',
          'title'   => 'The Key to the Ancients + Diamond Weapon',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/043-the-key-to-the-ancients-diamond-weapon.txt'),
        ]);
        Article::create([
          'slug'    => 'stopping-midgar-cannon',
          'title'   => 'Stopping Midgar\'s Cannon!',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/044-stopping-midgar-cannon.txt'),
        ]);
        Article::create([
          'slug'    => 'the-northern-crater',
          'title'   => 'The Northern Crater',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/045-the-northern-crater.txt'),
        ]);
        Article::create([
          'slug'    => 'doing-the-last-optional-things',
          'title'   => 'Doing the last optional things',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/046-doing-the-last-optional-things.txt'),
        ]);
        Article::create([
          'slug'    => 'the-final-fights-of-this-fantasy',
          'title'   => 'The Final Fights of this Fantasy',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/047-the-final-fights-of-this-fantasy.txt'),
        ]);

        // II) Characters and Storyline
        Article::create([
          'slug'    => 'characters-and-storyline',
          'title'   => 'Characters and Storyline [Contains SPOILERS!]',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/048-characters-and-storyline.txt')
        ]);
        Article::create([
          'slug'    => 'cloud-strife',
          'title'   => 'Cloud Strife',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/049-cloud-strife.txt')
        ]);
        Article::create([
          'slug'    => 'barret-wallace',
          'title'   => 'Barret Wallace',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/050-barret-wallace.txt')
        ]);
        Article::create([
          'slug'    => 'tifa-lockheart',
          'title'   => 'Tifa Lockheart',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/051-tifa-lockheart.txt')
        ]);
        Article::create([
          'slug'    => 'aeris-gainsborough',
          'title'   => 'Aeris Gainsborough',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/052-aeris-gainsborough.txt')
        ]);
        Article::create([
          'slug'    => 'redxiii-nanaki',
          'title'   => 'RedXIII (Nanaki)',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/053-redxiii-nanaki.txt')
        ]);
        Article::create([
          'slug'    => 'cait-sith',
          'title'   => 'Cait Sith',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/054-cait-sith.txt')
        ]);
        Article::create([
          'slug'    => 'cid-highwind',
          'title'   => 'Cid Highwind',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/055-cid-highwind.txt')
        ]);
        Article::create([
          'slug'    => 'yuffie-kisaragi',
          'title'   => 'Yuffie Kisaragi',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/056-yuffie-kisaragi.txt')
        ]);
        Article::create([
          'slug'    => 'vincent-valentine',
          'title'   => 'Vincent Valentine',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/057-vincent-valentine.txt')
        ]);

        // III) Minigames
        Article::create([
          'slug'    => 'gold-saucer-wonder-square',
          'title'   => 'title',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/058-gold-saucer-wonder-square.txt')
        ]);
        Article::create([
          'slug'    => 'gold-saucer-speed-square',
          'title'   => 'title',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/059-gold-saucer-speed-square.txt')
        ]);
        Article::create([
          'slug'    => 'gold-saucer-battle-square',
          'title'   => 'title',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/060-gold-saucer-battle-square.txt')
        ]);
        Article::create([
          'slug'    => 'gold-saucer-chocobo-square',
          'title'   => 'title',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/061-gold-saucer-chocobo-square.txt')
        ]);
        Article::create([
          'slug'    => 'gold-saucer-round-event-ghost-station-square-and-gp-dude',
          'title'   => 'title',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/062-gold-saucer-round-event-ghost-station-square-and-gp-dude.txt')
        ]);
        Article::create([
          'slug'    => 'gold-saucer-the-gold-saucer-date-scene-and-date-mechanics',
          'title'   => 'title',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/063-gold-saucer-the-gold-saucer-date-scene-and-date-mechanics.txt')
        ]);
        Article::create([
          'slug'    => 'quick-guide-to-breed-a-gold-chocobo',
          'title'   => 'title',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/064-quick-guide-to-breed-a-gold-chocobo.txt')
        ]);
        Article::create([
          'slug'    => 'chocobo-breeding-mechanics',
          'title'   => 'title',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/065-chocobo-breeding-mechanics.txt')
        ]);
        Article::create([
          'slug'    => 'fort-condor',
          'title'   => 'title',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/066-fort-condor.txt')
        ]);
        Article::create([
          'slug'    => 'bone-village',
          'title'   => 'title',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/067-bone-village.txt')
        ]);
        Article::create([
          'slug'    => 'gym-squats-in-wall-market',
          'title'   => 'title',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/068-gym-squats-in-wall-market.txt')
        ]);
        Article::create([
          'slug'    => 'mayor-dominos-password',
          'title'   => 'title',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/069-mayor-dominos-password.txt')
        ]);
        Article::create([
          'slug'    => 'g-bike',
          'title'   => 'title',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/070-g-bike.txt')
        ]);
        Article::create([
          'slug'    => 'tifas-piano',
          'title'   => 'title',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/071-tifas-piano.txt')
        ]);
        Article::create([
          'slug'    => 'cpr-on-priscilla',
          'title'   => 'title',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/072-cpr-on-priscilla.txt')
        ]);
        Article::create([
          'slug'    => 'jumping-with-mr-dolphin',
          'title'   => 'title',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/073-jumping-with-mr-dolphin.txt')
        ]);
        Article::create([
          'slug'    => 'parading',
          'title'   => 'title',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/074-parading.txt')
        ]);
        Article::create([
          'slug'    => 'the-send-off-for-rufus',
          'title'   => 'title',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/075-the-send-off-for-rufus.txt')
        ]);
        Article::create([
          'slug'    => 'snowboarding-at-icicle-valley',
          'title'   => 'title',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/076-snowboarding-at-icicle-valley.txt')
        ]);
        Article::create([
          'slug'    => 'submarine-battle',
          'title'   => 'title',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/077-submarine-battle.txt')
        ]);

        // IV) Optional Quests & Areas
        Article::create([
          'slug'    => 'getting-yuffie',
          'title'   => 'Getting Yuffie',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/078-getting-yuffie.txt')
        ]);
        Article::create([
          'slug'    => 'wutai-da-chao-fire-cave',
          'title'   => 'Wutai Da-chao Fire Cave',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/079-wutai-da-chao-fire-cave.txt')
        ]);
        Article::create([
          'slug'    => 'ancient-forest',
          'title'   => 'Ancient Forest',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/080-ancient-forest.txt')
        ]);
        Article::create([
          'slug'    => 'lucrecia-s-cave',
          'title'   => 'Lucrecia\'s Cave',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/081-lucrecia-s-cave.txt')
        ]);
        Article::create([
          'slug'    => 'the-backroom',
          'title'   => 'The backroom',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/082-the-backroom.txt')
        ]);
        Article::create([
          'slug'    => 'treasure-at-rocket-town',
          'title'   => 'Treasure at Rocket Town',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/083-treasure-at-rocket-town.txt')
        ]);
        Article::create([
          'slug'    => 'chocobo-sage',
          'title'   => 'Chocobo Sage',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/084-chocobo-sage.txt')
        ]);
        Article::create([
          'slug'    => 'cactus-island',
          'title'   => 'Cactus Island',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/085-cactus-island.txt')
        ]);
        Article::create([
          'slug'    => 'villa-costa-del-sol',
          'title'   => 'Villa Costa Del Sol',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/086-villa-costa-del-sol.txt')
        ]);
        Article::create([
          'slug'    => 'revisiting-midgar-slums',
          'title'   => 'Revisiting Midgar Slums',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/087-revisiting-midgar-slums.txt')
        ]);
        Article::create([
          'slug'    => 'cave-with-sleeping-man',
          'title'   => 'Cave with Sleeping Man',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/088-cave-with-sleeping-man.txt')
        ]);
        Article::create([
          'slug'    => 'the-weapon-seller',
          'title'   => 'The Weapon Seller',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/089-the-weapon-seller.txt')
        ]);
        Article::create([
          'slug'    => 'the-turtle-s-paradise-flyers',
          'title'   => 'The Turtle\'s Paradise Flyers',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/090-the-turtle-s-paradise-flyers.txt')
        ]);
        Article::create([
          'slug'    => 'hidden-scene-in-shinra-mansion',
          'title'   => 'Hidden Scene in Shinra Mansion',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/091-hidden-scene-in-shinra-mansion.txt')
        ]);
        Article::create([
          'slug'    => 'creating-master-materia-from-huge-materia',
          'title'   => 'Creating Master Materia from Huge Materia',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/092-creating-master-materia-from-huge-materia.txt')
        ]);
        Article::create([
          'slug'    => 'the-old-beat-up-key-in-mideel',
          'title'   => 'The Old beat-up key in Mideel',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/093-the-old-beat-up-key-in-mideel.txt')
        ]);
        Article::create([
          'slug'    => 'the-kalm-traveller',
          'title'   => 'The Kalm Traveller',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/094-the-kalm-traveller.txt')
        ]);
        Article::create([
          'slug'    => 'the-4-secret-materia-caves',
          'title'   => 'The 4 Secret Materia Caves',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/095-the-4-secret-materia-caves.txt')
        ]);

        // V) The optional WEAPONs
        Article::create([
          'slug'    => 'ultimate-weapon',
          'title'   => 'Ultimate Weapon',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/096-ultimate-weapon.txt')
        ]);
        Article::create([
          'slug'    => 'emerald-weapon',
          'title'   => 'Emerald Weapon',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/097-emerald-weapon.txt')
        ]);
        Article::create([
          'slug'    => 'ruby-weapon',
          'title'   => 'Ruby Weapon',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/098-ruby-weapon.txt')
        ]);

        // VI) Ultimate Weapons & (Ultimate) L4 Limit Break Manuals
        Article::create([
          'slug'    => 'ultimate-weapon-and-l4-limit-break-list',
          'title'   => 'Ultimate Weapon & L4 Limit Break List',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/099-ultimate-weapon-and-l4-limit-break-list.txt')
        ]);
        Article::create([
          'slug'    => 'ultimate-weapons-at-max-power',
          'title'   => 'Ultimate Weapons at Max Power',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/100-ultimate-weapons-at-max-power.txt')
        ]);

        // VII) General Useful Information
        Article::create([
          'slug'    => 'character-stats-information',
          'title'   => 'Character Stats Information',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/101-character-stats-information.txt')
        ]);
        Article::create([
          'slug'    => 'character-s-min-or-max-natural-stats',
          'title'   => 'Character\'s Min/Max Natural Stats',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/102-character-s-min-or-max-natural-stats.txt')
        ]);
        Article::create([
          'slug'    => 'battle-types-and-front-or-backrow',
          'title'   => 'Battle Types & Front/Backrow',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/103-battle-types-and-front-or-backrow.txt')
        ]);
        Article::create([
          'slug'    => 'gaining-experience',
          'title'   => 'Gaining Experience',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/104-gaining-experience.txt')
        ]);
        Article::create([
          'slug'    => 'elemental-information',
          'title'   => 'Elemental Information',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/105-elemental-information.txt')
        ]);
        Article::create([
          'slug'    => 'status-effects',
          'title'   => 'Status Effects',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/106-status-effects.txt')
        ]);
        Article::create([
          'slug'    => 'limit-breaks',
          'title'   => 'Limit Breaks',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/107-limit-breaks.txt')
        ]);
        Article::create([
          'slug'    => 'useful-wins-steals-and-morphs',
          'title'   => 'Useful Wins, Steals & Morphs',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/108-useful-wins-steals-and-morphs.txt')
        ]);
        Article::create([
          'slug'    => 'shopping-list',
          'title'   => 'Shopping List',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/109-shopping-list.txt')
        ]);
        Article::create([
          'slug'    => 'overflow',
          'title'   => 'Overflow',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/110-overflow.txt')
        ]);

        // VIII) Lists: Equipment, Materia & Spells
        Article::create([
          'slug'    => 'items',
          'title'   => 'Items',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/111-items.txt')
        ]);
        Article::create([
          'slug'    => 'key-items',
          'title'   => 'Key Items',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/112-key-items.txt')
        ]);
        Article::create([
          'slug'    => 'weapons',
          'title'   => 'Weapons',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/113-weapons.txt')
        ]);
        Article::create([
          'slug'    => 'armor',
          'title'   => 'Armor',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/114-armor.txt')
        ]);
        Article::create([
          'slug'    => 'accessories',
          'title'   => 'Accessories',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/115-accessories.txt')
        ]);
        Article::create([
          'slug'    => 'magic-green-materia-and-magic-spells',
          'title'   => 'Magic Green Materia & Magic Spells',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/116-magic-green-materia-and-magic-spells.txt')
        ]);
        Article::create([
          'slug'    => 'summon-red-materia-and-summon-spells',
          'title'   => 'Summon Red Materia & Summon Spells',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/117-summon-red-materia-and-summon-spells.txt')
        ]);
        Article::create([
          'slug'    => 'support-blue-materia',
          'title'   => 'Support Blue Materia',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/118-support-blue-materia.txt')
        ]);
        Article::create([
          'slug'    => 'independent-purple-materia',
          'title'   => 'Independent Purple Materia',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/119-independent-purple-materia.txt')
        ]);
        Article::create([
          'slug'    => 'command-yellow-materia',
          'title'   => 'Command Yellow Materia',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/120-command-yellow-materia.txt')
        ]);
        Article::create([
          'slug'    => 'enemy-skills',
          'title'   => 'Enemy Skills',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/121-enemy-skills.txt')
        ]);
        Article::create([
          'slug'    => 'materia-combinations',
          'title'   => 'Materia Combinations',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/122-materia-combinations.txt')
        ]);
        Article::create([
          'slug'    => 'reflection',
          'title'   => 'Reflection',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/123-reflection.txt')
        ]);

        // IX) The Perfection Challenge
        Article::create([
          'slug'    => 'perfection-challenge-introduction',
          'title'   => 'Perfection Challenge Introduction',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/124-perfection-challenge-introduction.txt')
        ]);
        Article::create([
          'slug'    => 'perfection-challenge-stat-maxing',
          'title'   => 'Perfection Challenge Stat Maxing',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/125-perfection-challenge-stat-maxing.txt')
        ]);
        Article::create([
          'slug'    => 'perfection-challenge-item-maxing',
          'title'   => 'Perfection Challenge Item Maxing',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/126-perfection-challenge-item-maxing.txt')
        ]);
        Article::create([
          'slug'    => 'perfection-challenge-un-mastered-materia-maxing',
          'title'   => 'Perfection Challenge Un-mastered Materia Maxing',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/127-perfection-challenge-un-mastered-materia-maxing.txt')
        ]);
        Article::create([
          'slug'    => 'perfection-challenge-100-percent-treasure',
          'title'   => 'Perfection Challenge 100% Treasure',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/128-perfection-challenge-100-percent-treasure.txt')
        ]);
        Article::create([
          'slug'    => 'perfection-challenge-lost-forever-items-and-things-to-watch',
          'title'   => 'Perfection Challenge Lost Forever Items and things to watch',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/129-perfection-challenge-lost-forever-items-and-things-to-watch.txt')
        ]);
        Article::create([
          'slug'    => 'perfection-challenge-max-natural-hp-or-mp',
          'title'   => 'Perfection Challenge Max Natural HP/MP',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/130-perfection-challenge-max-natural-hp-or-mp.txt')
        ]);

        // X) Enemy Encyclopedia
        Article::create([
          'slug'    => 'enemy-encyclopedia-explanations',
          'title'   => 'Enemy Encyclopedia Explanations',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/131-enemy-encyclopedia-explanations.txt')
        ]);
        Article::create([
          'slug'    => 'enemy-encyclopedia',
          'title'   => 'Enemy Encyclopedia',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/132-enemy-encyclopedia.txt')
        ]);
        Article::create([
          'slug'    => 'world-map-encounters',
          'title'   => 'World Map Encounters',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/133-world-map-encounters.txt')
        ]);
        Article::create([
          'slug'    => 'chocobo-encounters',
          'title'   => 'Chocobo Encounters',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/134-chocobo-encounters.txt')
        ]);
        Article::create([
          'slug'    => 'field-map-encounters',
          'title'   => 'Field Map Encounters',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/135-field-map-encounters.txt')
        ]);

        // XI) Appendix
        Article::create([
          'slug'    => 'music-guide-ffvii-s-official-soundtrack',
          'title'   => 'Music Guide: FFVII\'s Official Soundtrack',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/136-music-guide-ffvii-s-official-soundtrack.txt')
        ]);
        Article::create([
          'slug'    => 'one-winged-angel-lyrics-and-translation',
          'title'   => 'One-Winged Angel Lyrics & Translation',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/137-one-winged-angel-lyrics-and-translation.txt')
        ]);
        Article::create([
          'slug'    => 'memory-card-slot-pictures',
          'title'   => 'Memory Card Slot Pictures',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/138-memory-card-slot-pictures.txt')
        ]);
        Article::create([
          'slug'    => 'tricks',
          'title'   => 'Tricks',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/139-tricks.txt')
        ]);
        Article::create([
          'slug'    => 'the-best-team',
          'title'   => 'The Best Team',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/140-the-best-team.txt')
        ]);
        Article::create([
          'slug'    => 'the-best-armor-and-accessory',
          'title'   => 'The Best Armor and Accessory',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/141-the-best-armor-and-accessory.txt')
        ]);
        Article::create([
          'slug'    => 'interesting-facts-did-you-know-that',
          'title'   => 'Interesting facts: Did you know that..?',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/142-interesting-facts-did-you-know-that.txt')
        ]);
        Article::create([
          'slug'    => 'pc-re-release-2012',
          'title'   => 'PC Re-release (2012)',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/143-pc-re-release-2012.txt')
        ]);

        // XII) Wanted List
        Article::create([
          'slug'    => 'wanted-list',
          'title'   => 'Wanted List',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/144-wanted-list.txt')
        ]);

        // XIII) Version History
        Article::create([
          'slug'    => 'version-history',
          'title'   => 'Version History',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/145-version-history.txt')
        ]);

        // XIV) Credits
        Article::create([
          'slug'    => 'credits',
          'title'   => 'Credits',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/146-credits.txt')
        ]);

        // XV) Copyright
        Article::create([
          'slug'    => 'copyright',
          'title'   => 'Copyright',
          'content' => file_get_contents('/home/vagrant/ext/001-ffvii.mss.io.dev/data/147-copyright.txt')
        ]);
    }

}
