<?php return [
	'conference' => [
		'title' => 'Pacific Northwest PHP',
		'abbr' => 'PNWPHP',
		'startDate' => new DateTime('2015-09-10T09:00:00+07:00'),
		'endDate' => new DateTime('2015-09-12T19:00:00+07:00'),
	],
	'rooms' => [
		'main' => [
			'name' => 'Main Event Room',
			'code' => 'main',
			'location' => 'Impact Hub Seattle',
			'floor' => '1st',
			'capacity' => 200,
		],
		'globe' => [
			'name' => 'Globe Room',
			'code' => 'globe',
			'location' => 'Impact Hub Seattle',
			'floor' => '2nd',
			'capacity' => 30,
		],
		'learning-1' => [
			'name' => 'Learning Studio 1',
			'code' => 'learning-1',
			'location' => 'Impact Hub Seattle',
			'floor' => '3rd',
			'capacity' => 50,
		],
		'learning-2' => [
			'name' => 'Learning Studio 2',
			'code' => 'learning-2',
			'location' => 'Impact Hub Seattle',
			'floor' => '4th',
			'capacity' => 50,
		],
		'puget-sound' => [
			'name' => 'Puget Sound Room',
			'code' => 'puget-sound',
			'location' => '1918 Eighth Avenue',
			'floor' => '3rd',
			'capacity' => 60,
		],
	],
	'speakers' => [
		'anthony-ferrara' => [
			'name' => 'Anthony Ferrara',
			'code' => 'anthony-ferrara',
			'location' => 'New York, NY',
			'twitter' => 'ircmaxell',
            'company' => 'google',
			'avatar' => 'img/avatars/anthony-ferrara.jpg',
			'bio' => <<<BIO
Anthony Ferrara is a Developer Advocate for Google. He specializes in Object Oriented Design, Application Architecture,
Web Application Security and PHP Internals. He is a contributor to multiple Open Source projects, as well as the PHP
community as a whole. You can follow his blog at <a href="http://blog.ircmaxell.com"> or on Twitter at
<a href="http://twitter.com/ircmaxell">@ircmaxell</a>.
BIO
		],
		'josh-holmes' => [
			'name' => 'Josh Holmes',
			'code' => 'josh-holmes',
			'location' => 'Seattle, WA',
			'twitter' => 'joshholmes',
            'company' => 'microsoft',
			'avatar' => 'img/avatars/josh-holmes.jpg',
			'bio' => <<<BIO
Passionate soul who gets his kicks solving problems with deep fried awesomeness. Currently employed by Microsoft.
BIO
		],
        'margaret-staples' => [
            'code' => 'margaret-staples',
            'name' => 'Margaret Staples',
            'location' => 'Port Angeles, WA',
            'twitter' => 'dead_lugosi',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/54e8f26b53d328245f000007/avatar_square',
            'company' => null,
            'bio' => <<<BIO
As part of the AesopGames team, Margaret writes the code that makes the game work! She takes design documents and
translates them into game functions, and then takes those and delivers them to players through the web client and to
the AesopGames Unity developer through the API.
BIO
        ],
        'beau-simensen' => [
            'code' => 'beau-simensen',
            'name' => 'Beau Simensen',
            'location' => 'Madison, WI',
            'twitter' => 'beausimensen',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/54ea4657a782185269000008/avatar_square',
            'company' => 'dflydev',
            'bio' => <<<BIO
Beau Simensen (<a href="https://twitter.com/beausimensen">@beausimensen</a>, <a href="https://beau.io">beau.io</a>) has
been a professional polyglot programmer since 1998. He owns Dragonfly Development
(<a href="http://dflydev.com">dflydev.com</a>, a consulting company, and is co-host of That Podcast
(<a href="https://twitter.com/thatpodcast">@thatpodcast</a>, <a href="http://thatpodcast.io">thatpodcast.io</a>). An
active open-sourcer, he created Sculpin (<a href="https://sculpin.io">sculpin.io</a>) and helped create Stack PHP
(<a href="http://stackphp.com">stackphp.com</a>). He is also the Sculpin representative to the PHP Framework
Interoperability Group (PHP-FIG). Beau is a proponent of framework agnostic code. Unglue all the things!
BIO
        ],
        'chris-hartjes' => [
            'code' => 'chris-hartjes',
            'name' => 'Chris Hartjes',
            'location' => 'Milton, Ontario, Canada',
            'twitter' => 'grmpyprogrammer',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/54eb66c2db6429e6f4000022/avatar_square',
            'company' => 'roave',
            'bio' => 'Chris Hartjes has been building web applications of all shapes and sizes since 1998, ranging from catalogs of CD compilations for professional DJ\'s to portal pages for large US cable television providers. Chris gives back to the programming communities that have helped him by mentoring, speaking at conferences, and by co-organizing TrueNorth PHP. As the author of two books on writing testable PHP code and using testing tools, he believes that testing and automation are secret weapons that organizations can use to deliver high-quality applications quickly. He works from his basement office in the snowy wilds of Canada. He can also be heard semi-regularly on the /dev/hell podcast with Ed Finkler',
        ],
        'adam-culp' => [
            'code' => 'adam-culp',
            'name' => 'Adam Culp',
            'location' => 'Boca Raton, FL',
            'twitter' => 'adamculp',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/54eb71e1db6429d9ff000002/avatar_square',
            'company' => null,
            'bio' => 'Adam Culp (@AdamCulp) author of "Refactoring 101" and consultant at Zend Technologies is passionate about developing with PHP and contributes to many open source projects.    He organizes the SunshinePHP Developer Conference and South Florida PHP Users Group (SoFloPHP) where he enjoys helping others write good code, implement standards, refactor efficiently, and incorporate unit and functional testing into their projects.    He is a Zend Certified PHP 5.3 Engineer, and holds a seat on the Zend Framework Certification Advisory Board.    When he is not coding or contributing to various developer communities, he can be found hiking around the United States National Parks, teaching judo, or long(ultra) distance running.',
        ],
        'dave-stokes' => [
            'code' => 'dave-stokes',
            'name' => 'Dave Stokes',
            'location' => 'Trophy Club, Texas',
            'twitter' => 'stoker',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/54eb758f4f630c0b68000012/avatar_square',
            'company' => 'mysql',
            'bio' => 'Dave Stokes is a MySQL Community Manager for Oracle and has been using PHP & MySQL since they both became available.',
        ],
        'phil-sturgeon' => [
            'code' => 'phil-sturgeon',
            'name' => 'Phil Sturgeon',
            'location' => 'Brooklyn, NY',
            'twitter' => 'philsturgeon',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/54ee8e005fba45a55000000a/avatar_square',
            'company' => null,
            'bio' => 'Founder of PyroCMS, Senior Developer at Ride, Programming Polyglot, PHP-FIG member, and occasionally gets chased by bears.',
        ],
        'yitzchok-willroth' => [
            'code' => 'yitzchok-willroth',
            'name' => 'Yitzchok Willroth',
            'location' => 'Lakewood, New Jersey',
            'twitter' => 'coderabbi',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/54f095b9f88e3dd21b00000e/avatar_square',
            'company' => null,
            'bio' => 'Yitzchok Willroth is an independent application developer, consultant and coach living in Lakewood, NJ. A start-up vet, dev bootcamp instructor and popular conference speaker, Yitzchok is the organizer of the ShorePHP User Group, co organizer of the NY-PHP User Group, and an active participant in the PHPMentoring Initiative. Passionate about clean code and robust application architecture, he is also a strong proponent of remote teams as a way for organizations to thrive while affording developers a healthy work:life balance.',
        ],
        'michael-babker' => [
            'code' => 'michael-babker',
            'name' => 'Michael Babker',
            'location' => 'United States',
            'twitter' => 'mbabker',
            'avatar' => 'img/avatars/michael-babker.jpg',
            'company' => null,
            'bio' => 'Michael Babker is a multi-talented IT geek working for WebSpark, Inc. He’s been developing in PHP since 2010 working primarily with Symfony and Joomla code. He’s known to be rather opinionated on all matters code and enjoys learning new platforms and taking in the many sights the world has to offer.',
        ],
        'larry-garfield' => [
            'code' => 'larry-garfield',
            'name' => 'Larry Garfield',
            'location' => 'United States',
            'twitter' => 'Crell',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/54f0ae95f88e3d49b100001d/avatar_square',
            'company' => null,
            'bio' => <<<BIO
Larry Garfield has been building web sites since he was a sophomore in high school, which is longer ago than he\'d like
to admit. At Palantir, Larry is a Senior Architect and Community Lead, developing solutions for medium to large cultural
and educational institutions. He also works to represent both Palantir and Drupal in the broader developer community.

Larry is an active Drupal core contributor, including the principle architect of the Drupal 7 database system and the
Drupal 8 Web Services Lead. He is also a member of the Advisory Board of the Drupal Association and the Drupal
representative to the Framework Interoperability Group. Larry holds a Master’s degree in Computer Science from DePaul
University.

Larry is a co-author of "Drupal 7 Module Development" from Packt Publishing. He blogs at both
<a href="http://www.palantir.net/">http://www.palantir.net/</a> and
<a href="http://www.garfieldtech.com/">http://www.garfieldtech.com/</a>.
BIO
        ],
        'jeremy-lindblom' => [
            'code' => 'jeremy-lindblom',
            'name' => 'Jeremy Lindblom',
            'location' => 'Seattle, WA',
            'twitter' => 'jeremeamia',
            'avatar' => 'img/avatars/jeremy-lindblom.jpg',
            'company' => 'aws',
            'bio' => <<<BIO
Jeremy is a PHP Software Engineer at <a href="http://aws.amazon.com/">Amazon Web Services (AWS)</a>, co-author of the
<a href="https://github.com/aws/aws-sdk-php">AWS SDK for PHP</a> (<a href="https://twitter.com/awsforphp">@awsforphp</a>),
organizer of the <a href="http://pnwphp.com/">Pacific Northwest PHP (PNWPHP)</a> conference, president of the
<a href="http://www.meetup.com/seaphp/">Seattle PHP User Group</a> (<a href="https://twitter.com/seaphp">@seaphp</a>),
voting representative of the <a href="http://guzzlephp.org/">Guzzle</a> project for
<a href="http://www.php-fig.org/">PHP-FIG</a>, member of the Zend Certification Advisory Board for the PHP 5.5 exam,
purveyor of <a href="http://phpbard.tumblr.com/">PHP poetry</a> (<a href="https://twitter.com/phpbard">@phpbard</a>),
and a maker of funny faces.
BIO
        ],
        'samantha-quinones' => [
            'code' => 'samantha-quinones',
            'name' => 'Samantha Qui&ntilde;ones',
            'location' => 'Washington D.C.',
            'twitter' => 'ieatkillerbees',
            'avatar' => 'img/avatars/samantha-quinones.jpg',
            'company' => 'aol',
            'bio' => <<<BIO
Samantha Quiñones is a polyglot hacker and systems architecture expert. Over the course of her 17-year career, she has
built software and led teams for some of the largest names in financial services and digital media and is currently a
Principal Software Engineer on the content platform team at AOL. Samantha is an accomplished writer and frequent speaker
at technology conferences, a participant in the White House Data Jam on STEM Workforce Quality, Flow, and Diversity and
has been recognized by the Huffington Post as one of the top Latinas in American Media.
BIO
        ],
        'cal-evans' => [
            'code' => 'cal-evans',
            'name' => 'Cal Evans',
            'location' => 'Nashville, TN',
            'twitter' => 'CalEvans',
            'avatar' => 'img/avatars/cal-evans.jpg',
            'company' => null,
            'bio' => <<<BIO
Many moons ago, at the tender age of 14, Cal touched his first computer. (We're using the term "computer" loosely here,
it was a TRS-80 Model 1) Since then his life has never been the same. He graduated from TRS-80s to Commodores and
eventually to IBM PC's.

For the past 15 years Cal has worked with PHP and MySQL on Linux, OSX, and Windows. He has built a variety of projects
ranging in size from simple web pages to multi-million dollar web applications. When not banging his head on his monitor,
attempting a blood sacrifice to get a particular piece of code working, he enjoys building and managing development teams
using his widely imitated but never patented management style of "management by wandering around".

These days, when not working with PHP, Cal can be found working on a variety of projects like Nomad PHP. He speaks at
conferences around the world on topics ranging from technical talks to motivational talks for developers. If you happen
to meet him at a conference, don't be afraid to buy him a shot of Bourbon.

Cal is based in Nashville, TN, where he is happily married to wife 1.31,
<a href="http://kathyevans.biz/" target="_blank">the lovely and talented Kathy</a>. Together they have 2 wonderful kids
who were both smart enough not to pursue a job in IT.</p>
BIO
        ],
        'amber-matz' => [
            'code' => 'amber-matz',
            'name' => 'Amber Matz',
            'location' => 'Portland, OR',
            'twitter' => 'amberhimesmatz',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/54f0e5666500a3a8e4000006/avatar_square',
            'company' => null,
            'bio' => 'Amber Matz (neé Himes) is an educator with Drupalize.Me. With over a decade of experience as a Web developer, Amber has tackled the hardest problems the web offers, including data migrations and editorial workflows. In the past five years, Amber has focused her talents as a Drupal developer, and readily shares her experience with others. She was the creator and host of the weekly series, DevMunch--an online education Web show designed to help developers upgrade their skills.

Through her training as a massage therapist, volunteer community mediator, and project manager, Amber learned the importance of being a responsive communicator especially during times of stress. Her commitment to asking the right questions, and modifying her approach based on feedback, has made her effective at team process improvements, and learner-centered instruction. Amber has developed a reputation as an agile team member, ready to tackle any problem which is presented to her.

These days, when she\'s not in front of the computer at her home in Beaverton, Oregon, she\'s crocheting gifts for her nieces and nephew, tending her flowers and veggies at a local community garden, exploring the Pacific Northwest with her camera, and practicing rock-and-roll power chords on the accordion.',
        ],
        'robert-mcfrazier' => [
            'code' => 'robert-mcfrazier',
            'name' => 'Robert McFrazier',
            'location' => 'Snohomish, WA',
            'twitter' => 'rmcfrazier',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/54f2740e7ae7c78153000007/avatar_square',
            'company' => null,
            'bio' => 'I have been in the software industry in the Seattle area for over 15 years in many different roles including LAMP engineer, software developer, technical trainer, architect, technical support, and manager. I enjoy learning new things and working on strong teams. I spend my free time with my wife and my son, trying to stay dry in the pacific northwest. I spend all day with my head in the clouds and containers.',
        ],
        'joshua-warren' => [
            'code' => 'joshua-warren',
            'name' => 'Joshua Warren',
            'location' => 'Dallas, Texas',
            'twitter' => 'JoshuaSWarren',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/550f5ca604f84134dd00000c/avatar_square',
            'company' => 'creatuity',
            'bio' => 'Joshua Warren has been developing web applications with PHP since 1999. He is the Founder & CEO of Creatuity in Dallas, Texas, where he works on eCommerce projects with Magento and the Yii framework. He founded Creatuity in 2008 as a development firm and has grown it to a team of over 25, including 14 developers working across 2 continents. When Joshua isn\'t developing, he enjoys traveling to new countries to try local food and beer while meeting developers at local meetups as well as connecting with developers around the world via Twitter.',
        ],
        'gemma-anible' => [
            'code' => 'gemma-anible',
            'name' => 'Gemma Anible',
            'location' => 'Albuquerque, NM',
            'twitter' => 'ellotheth',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/55102d8a46ab610ef2000004/avatar_square',
            'company' => null,
            'bio' => 'Gemma is a software engineer, video gamer and recovering classical violinist who has been developing PHP web applications since before PHP5 (and applications in C, .NET and Delphi since before then). She is passionate about using pragmatic processes and tooling to support developers of all types and skillsets, and her level of excitement over learning new dev technology tends to correlate strongly with her level of caffeination. Gemma and her husband live with their two dogs in New Mexico, where they climb volcanoes for fun.',
        ],
        'ben-lobaugh' => [
            'code' => 'ben-lobaugh',
            'name' => 'Ben Lobaugh',
            'location' => 'Seattle, WA',
            'twitter' => 'benlobaugh',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/55171c8589bee6fb3d000005/avatar_square',
            'company' => null,
            'bio' => 'Ben Lobaugh has been an avid open source enthusiast for over 15 years. During that time he has work on all sort of projects from mom & pop shops to multinational corporations. In his downtime Ben can be found cruising Puget Sound with on his beautiful sailboat Zippey or play with his dog Bella in the park.',
        ],
        'luke-kysow' => [
            'code' => 'luke-kysow',
            'name' => 'Luke Kysow',
            'location' => 'Vancouver, Canada',
            'twitter' => 'lkysow',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/55173d5389bee61bf600001a/avatar_square',
            'company' => null,
            'bio' => 'Luke is a Software Engineer on the Platform Team at Hootsuite in Vancouver. He\'s currently working on splitting Hootsuite\'s PHP monolith into a distributed microsystems architecture so they can scale even further. When he\'s not at his laptop you can probably find Luke hanging off a cliff rock climbing somewhere.',
        ],
        'ben-marks' => [
            'code' => 'ben-marks',
            'name' => 'Ben Marks',
            'location' => 'Isle of Palms, SC',
            'twitter' => 'benmarks',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/551acdfb4f0d7e8c2800001f/avatar_square',
            'company' => 'magento',
            'bio' => 'Ben has been developing with, teaching, and talking about Magento for seven years. He enjoys helping merchants and developers solve the challenges of commerce as much as he enjoys helping to improve Magento for everyone\'s benefit.',
        ],
        'keith-casey' => [
            'code' => 'keith-casey',
            'name' => 'Keith Casey',
            'location' => 'United States',
            'twitter' => 'CaseySoftware',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/551ae9504f0d7e8c28000048/avatar_square',
            'company' => 'clarify',
            'bio' => 'Keith Casey currently serves as Director of Product for Clarify working to make APIs easier, more consistent, and help solve real world problems. Previously, as a developer evangelist at Twilio, he worked to get good technology into the hands of good people to do great things. In his spare time, he works to build and support the Austin technology community, blogs occasionally at CaseySoftware.com and is completely fascinated by monkeys. Keith is also the author of <a href="https://leanpub.com/restful-api-design">A Practical Approach to API Design</a> from Leanpub.',
        ],
        'jeremy-mikola' => [
            'code' => 'jeremy-mikola',
            'name' => 'Jeremy Mikola',
            'location' => 'Hoboken, NJ',
            'twitter' => 'jmikola',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/551b3779ae44cd0dd300009a/avatar_square',
            'company' => 'mongodb',
            'bio' => 'Jeremy Mikola is a software engineer at MongoDB\'s NYC office. As a member of the driver and evangelism team, he helps develop the PHP driver and contributes to various OSS projects, such as Doctrine ODM and React PHP. Jeremy lives in Hoboken, NJ and is known to enjoy a good sandwich.',
        ],
        'benji-schwartz-gilbert' => [
            'code' => 'benji-schwartz-gilbert',
            'name' => 'Benji Schwartz-Gilbert',
            'location' => 'Seattle, WA',
            'twitter' => '',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/551b94ff84e600d55500001f/avatar_square',
            'company' => 'tableau',
            'bio' => 'Benji is currently a Dev Manager in Business Systems at Tableau Software Inc. He and his team build and maintain the online payment, eCommerce, and cloud integration systems for the company.',
        ],
        'sara-golemon' => [
            'code' => 'sara-golemon',
            'name' => 'Sara Golemon',
            'location' => '',
            'twitter' => 'SaraMG',
            'avatar' => 'img/avatars/sara-golemon.jpg',
            'company' => 'facebook',
            'bio' => <<<BIO
Sara Golemon is a long standing contributor to the PHP runtime, the Open Source maintainer of
<a href="http://hhvm.com/" target="_blank">HHVM</a>, and the author of
<a href="http://www.amazon.com/Extending-Embedding-PHP-Sara-Golemon/dp/067232704X" target="_blank">Extending and
Embedding PHP</a>.
BIO
        ],
        'eryn-oneil' => [
            'code' => 'eryn-oneil',
            'name' => 'Eryn O\'Neil',
            'location' => 'Minneapolis, MN',
            'twitter' => 'eryno',
            'avatar' => 'img/avatars/eryn-oneil.jpg',
            'company' => null,
            'bio' => <<<BIO
Eryn O&rsquo;Neil is a web developer and technical lead at Clockwork Active Media in Minneapolis, MN. As part of an
interactive agency, she has worked on everything from e-commerce to online promotions to creating and maintaining an
internal framework and CMS. Her philosophy is to build software by placing humans first: both the people who will use it
and the developers who will build it alongside you (and maintain it afterwards). Based in Minneapolis, MN, Eryn spends
most of her free time swing and blues dancing, rock climbing, and wishing it weren&rsquo;t snowing.
BIO
        ],
        'robert-purcell' => [
            'code' => 'robert-purcell',
            'name' => 'Robert Purcell',
            'location' => '',
            'twitter' => '',
            'avatar' => 'http://pnwphp2015.busyconf.com/speakers/54f0cb510ca1df8750000002/avatar_square',
            'company' => 'nexcess',
            'bio' => <<<BIO
TBA
BIO
        ],
        'jeff-barr' => [
            'code' => 'jeff-barr',
            'name' => 'Jeff Barr',
            'location' => 'Seattle, WA',
            'twitter' => 'jeffbarr',
            'avatar' => 'img/avatars/jeff-barr.jpg',
            'company' => 'aws',
            'bio' => <<<BIO
Chief Evangelist for the Amazon Web Services (follow me for AWS updates and chatter). Father of 5, grandfather of 2.
Author. UW MCDM Graduate.
BIO
        ],
        'davey-shafik' => [
            'code' => 'davey-shafik',
            'name' => 'Davey Shafik',
            'location' => '',
            'twitter' => 'dshafik',
            'avatar' => 'img/avatars/davey-shafik.jpg',
            'company' => 'engine-yard',
            'bio' => <<<BIO
Davey Shafik is a full-time developer with over 14 years of experience in PHP and related technologies. He is a
Community Engineer at Engine Yard and has written three books, numerous articles, and spoken at conferences the world
over. He is best known for his books, the <a href="http://zceguide.com/" target="_blank">Zend PHP Certification Study
Guide</a> and <a href="https://learnable.com/books/php-master-write-cutting-edge-code" target="_blank">PHP Master:
Write Cutting Edge Code</a>, and as the creator of <a href="http://php.net/phar" target="_blank">PHP Archive (PHAR)</a>
for PHP 5.3.

Davey is passionate about improving the tech community. He co-organizes the <a href="http://mhprompt.org/"
target="_blank">Prompt</a> initiative (<a href="http://mhprompt.org" target="_blank">mhprompt.org</a>), dedicated to
lifting the stigma surrounding mental health discussions, and has worked with PHPWomen since its inception.
BIO
        ],
        'ed-finkler' => [
            'code' => 'ed-finkler',
            'name' => 'Ed Finkler',
            'location' => '',
            'twitter' => 'funkatron',
            'avatar' => 'img/avatars/ed-finkler.jpg',
            'company' => 'graph-story',
            'bio' => <<<BIO
Ed Finkler, also known as <a href="https://twitter.com/funkatron" target="_blank">Funkatron</a>, started making web
sites before browsers had frames. He does front-end and server-side work in Python, PHP, and JavaScript.

He served as web lead and security researcher at <a href="http://www.cerias.purdue.edu/" target="_blank">The Center for
Education and Research in Information Assurance and Security (CERIAS) at Purdue University</a> for 9 years, and he's an
partner emeritus of <a href="http://fictivekin.com/" target="_blank">Fictive Kin</a>. Along with Chris Hartjes, Ed is
co-host of the <a href="http://devhell.info/" target="_blank">Development Hell podcast</a>.

Ed's current passion is raising mental health awareness in the tech community with his
<a href="http://funkatron.com/osmi" target="_blank">Open Sourcing Mental Illness</a> speaking campaign. He is part of
<a href="http://prompt.engineyard.com/" target="_blank">Engine Yard's Prompt</a> campaign.</p><p>Ed writes at
<a href="http://funkatron.com" target="_blank">funkatron.com</a>.
BIO
        ],
	],
	'talks' => [
		'anatomy-of-a-type-system' => [
			'title' => 'Anatomy Of A Type System',
			'code' => 'anatomy-of-a-type-system',
			'tags' => ['types', 'php7', 'theory'],
			'speaker' => 'anthony-ferrara',
			'type' => 'session',
            'room' => 'main',
            'time' => new DateTime('2015-09-12T14:30:00+07:00'),
            'length' => 50,
			'description' => <<<DESC
PHP 7 is coming quickly. One of the major features that it brings with it is the ability to use scalar typing. Are you
ready for it? Join me as we take a tour through PHP 7&rsquo;s type system from end to end. Don&rsquo;t know what a type
is? Come and find out! Are you a seasoned type user? Come learn how to leverage the new options! Confused about weak vs.
strict types? We&rsquo;ll cover concept, theory and practical details of the type system while exploring how PHP&rsquo;s
type system compares to other languages.
DESC
		],
		'down-the-rabbit-hole' => [
			'title' => 'Down the Rabbit Hole: Combining Career & Community',
			'code' => 'down-the-rabbit-hole',
			'tags' => ['community', 'career-growth'],
			'speaker' => 'cal-evans',
			'type' => 'keynote',
            'room' => 'main',
            'time' => null,
            'length' => 45,
			'description' => <<<DESC
The common mantra is "Community Works", but does it? How does burning vacation days to speak at a conference "work"?
How does staying up until the wee hours of the morning working on a project, just to turn around and go work your day
job "work"? Exactly how does community pay the bills each month? Let me show you how it works.

Let's jog through my career as a programmer. Along the way, we will take a look at how community has not only affected
my career in a positive manner; it has been a JATO strapped to my career. I'm just a programmer, not even a great one.
If community can help my career, it can help anyone's.
DESC
		],
		'stronger-than-fear' => [
			'title' => 'Stronger Than Fear: Mental Health in the Developer Community',
			'code' => 'stronger-than-fear',
			'tags' => ['mental-health'],
			'speaker' => 'ed-finkler',
			'type' => 'keynote',
            'room' => 'main',
            'time' => null,
            'length' => 45,
			'description' => <<<DESC
Mental disorders are the largest contributor to disease burden in North America, but the developer community and those
who employ us are afraid to face the problem head-on. In this keynote, we'll examine the state of mental health
awareness in the developer workplace, why most developers feel it isn't safe to talk about mental health, and what we
can do to change the culture and save lives.
DESC
		],
		'cloud-is-the-new-normal' => [
			'title' => 'Cloud is the New Normal',
			'code' => 'cloud-is-the-new-normal',
			'tags' => ['cloud', 'aws', 'architecture'],
			'speaker' => 'jeff-barr',
			'type' => 'keynote',
            'room' => 'main',
            'time' => null,
            'length' => 45,
			'description' => <<<DESC
TBA
DESC
		],
        'battled-hardened-laravel-lessons-in-scale' => [
            'code' => 'battled-hardened-laravel-lessons-in-scale',
            'title' => 'Battled-hardened Laravel: Lessons in Scale',
            'tags' => ['laravel', 'scaling', 'aws', 'cloud', 'framework'],
            'speaker' => 'benji-schwartz-gilbert',
            'type' => 'session',
            'room' => 'main',
            'time' => NULL,
            'length' => 50,
            'description' => <<<DESC
In this talk we'll cover how Tableau is using Laravel to deliver some of it's critical online infrastructure, why we
chose the framework, and lessons we've learned deploying it at scale. We'll also cover how we develop, test, and deploy
the framework from the first feature branch to production sign off.
DESC
        ],
        'from-dev-to-dev-management' => [
            'code' => 'from-dev-to-dev-management',
            'title' => 'From Dev to Dev Management',
            'tags' => ['leadership', 'management', 'career-growth'],
            'speaker' => 'robert-purcell',
            'type' => 'session',
            'room' => 'main',
            'time' => NULL,
            'length' => 50,
            'description' => <<<DESC
One career advancement path common for a developer is into management. One thing that's not always common for a
developer, though, is managerial skills. Let's discuss what it takes to be a manager, the management of other
developers, and the unique challenges of a programmer acting as manager.
DESC
        ],
        'adventures-in-symfony-building-an-mmorpg' => [
            'code' => 'adventures-in-symfony-building-an-mmorpg',
            'title' => 'Adventures in Symfony - Building an MMORPG',
            'tags' => ['symfony', 'twig', 'doctrine', 'framework'],
            'speaker' => 'margaret-staples',
            'type' => 'session',
            'room' => 'main',
            'time' => NULL,
            'length' => 50,
            'description' => <<<DESC
Ride along on a tour of my latest adventure! I will unpack my process for turning design ideas into game mechanics,
talk about the tools that were used (including Symfony and other open source goodies like Twig and Doctrine), examine
major roadblocks and how they were overcome, give a postmortem on key implementation decisions, and share the highlights
of what I learned along the way.
DESC
        ],
        'eating-elephpants' => [
            'code' => 'eating-elephpants',
            'title' => 'Eating ElePHPants',
            'tags' => ['drupal', 'modernize', 'composer'],
            'speaker' => 'larry-garfield',
            'type' => 'keynote',
            'room' => 'main',
            'time' => NULL,
            'length' => 45,
            'description' => <<<DESC
"Big ships turn slowly", the saying goes. That's true nautically and in software. Software grows over time, and the
bigger it gets the harder it is to make significant changes. When those changes are not just technical but cultural the
task becomes even harder.

But harder doesn't have to mean impossible. If Drupal can modernize itself from a PHP 4 procedural application to a PHP
5.4+ object-oriented platform, you can do the same with your project. It just requires being pragmatic.

No matter how old your code base, there is still hope! Let's see what it takes to modernize a legacy code base, and how
to build toward the system you want to have. Refactoring legacy code is just like eating an elePHPant... you do it one
bite at a time.
DESC
        ],
        'never-stop-pushing-strategies-and-tools-for-delivering-continuously' => [
            'code' => 'never-stop-pushing-strategies-and-tools-for-delivering-continuously',
            'title' => 'Never Stop Pushing: Strategies and Tools for Delivering Continuously',
            'tags' => ['continuous-delivery', 'continuous-integration', 'testing', 'deployment'],
            'speaker' => 'benji-schwartz-gilbert',
            'type' => 'session',
            'room' => 'main',
            'time' => NULL,
            'length' => 50,
            'description' => <<<DESC
Getting your features integrated, tested, and out the door for a single application can be a vicious cycle. Your testers
are complaining the feature isn't available in their environment, your MySQL box just crashed in production, and you
still have bugs to fix for your next release. Now what do you do when you find yourself maintaining <i>2 or 3 dozen</i>?
(Without losing your sanity)

<b>We've got you covered.</b>

We'll go over some of the tools and strategies for getting your PHP (and other) applications easily and automatically
continuously deployed. We'll cover how to automate testing, integrating changes, deploying, failover, and rolling back.
You'll come away from this talk with a workflow for assembling a leaner and meaner delivery cycle for reliable and
repeatable development.
DESC
        ],
        'open-source-love' => [
            'title' => 'Open Source, Love, and Social Responsibility',
            'code' => 'open-source-love',
            'tags' => ['open-source', 'community'],
            'speaker' => 'davey-shafik',
            'type' => 'keynote',
            'room' => 'main',
            'time' => new DateTime('2015-09-11T17:45:00+07:00'),
            'length' => 45,
            'description' => <<<DESC
This talk looks at the responsibility, we, the Open Source community, have to make things better. How we can use our
skills to make fundamental, meaningful change to the world around us.

We will explore the motivations around why we do what we do, and look at what the community and others have done for
us &mdash; and why it's important to do something with it.
DESC
        ],
        'project-triage' => [
            'title' => 'Project Triage: What to Do When It All Hits The Fan',
            'code' => 'project-triage',
            'tags' => ['project-management'],
            'speaker' => 'eryn-oneil',
            'type' => 'session',
            'room' => 'main',
            'time' => null,
            'length' => 50,
            'description' => <<<DESC
&ldquo;Hope for the best and plan for the worst.&rdquo; We spend a lot of time talking about best practices: the ways we
should run our projects and write our software so that everything turns out as well as possible. But when you add human
beings to the mix &mdash; whether they&rsquo;re coworkers, clients, or, well, you and I &mdash; something will
eventually go wrong.

Using case studies from the interactive agency world (where no two clients are ever the same), we&rsquo;ll talk about
methods for triage, what to do when you sense a project is on shaky ground, and ways to ensure everyone gets to the
other side in one piece.
DESC
        ],
        'tba1' => [
            'title' => 'TBA',
            'code' => 'tba1',
            'tags' => [],
            'speaker' => 'sara-golemon',
            'type' => 'keynote',
            'room' => 'main',
            'time' => new DateTime('2015-09-12T13:30:00+07:00'),
            'length' => 45,
            'description' => <<<DESC
TBA
DESC
        ],
        'async-php-with-react' => [
            'title' => 'Async PHP with ReactPHP',
            'code' => 'async-php-with-react',
            'tags' => ['async', 'reactphp'],
            'speaker' => 'jeremy-mikola',
            'type' => 'session',
            'room' => 'main',
            'time' => null,
            'length' => 50,
            'description' => <<<DESC
Beyond your standard CRUD operations, MongoDB offers a potpourri of special features. Looking for a quick search API? Full text indexes have you covered. Churning through large amounts of data? Consider map/reduce or the aggregation framework. Querying geospatial data? Create a 2dsphere index and go to town. Digging a bit deeper, we\'ll look at a few techniques for creating backend services, such as event long-polling and job queue processing.
DESC
        ],
        'from-procedural-to-object-oriented-php-in-drupal' => [
            'code' => 'from-procedural-to-object-oriented-php-in-drupal',
            'title' => 'From Procedural to Object-Oriented PHP in Drupal',
            'speaker' => 'amber-matz',
            'tags' => ['drupal', 'oop'],
            'type' => 'session',
            'room' => 'main',
            'time' => NULL,
            'length' => 50,
            'description' => 'One of the central changes in Drupal 8 is a shift to an object-oriented architecture. This represents a significant change in how module developers will utilize PHP in the context of Drupal. In the first part of this presentation, I will provide an overview of object-oriented PHP, why it was introduced into the Drupal 8 code base, how it differs from procedural programming, and the major object-oriented PHP concepts you\'ll find in Drupal 8 core.

Following this overview, I\'ll demonstrate two tools, one a Drupal module and the other a Symfony console application, both designed to help you get up to speed with the Drupal 8 systems and APIs.

By the end of this presentation, you\'ll be armed with tools, resources, concepts, and terminology that will enable you to boldly jump into Drupal 8 module development.

Who will benefit from this presentation?
- Developers who are familiar with Drupal 7 and are curious about the OO-PHP changes in Drupal 8
- Developers who are familiar with Drupal but are just starting to learn OO-PHP
- Developers who are not primarily Drupal developers, but are familiar with OO-PHP and are curious about the shift to an object-oriented architecture in Drupal 8',
        ],
        'building-your-api-utility-belt' => [
            'code' => 'building-your-api-utility-belt',
            'title' => 'Building your API Utility Belt',
            'speaker' => 'keith-casey',
            'tags' => ['api', 'testing', 'debugging', 'tools'],
            'type' => 'session',
            'room' => 'main',
            'time' => NULL,
            'length' => 50,
            'description' => 'No matter the situation, Batman always had the perfect tool on hand. It didn\'t matter how rare, bizarre, or unique the situation was, he was ready to save the day. Unfortunately, in software development, we don\'t have a utility belt. At best, our tools are scripts we\'ve cobbled together over the years that solve particular problems but leave us stuck more often than not. In this talk, we\'ll work to change that. I\'ll introduce you to seven tools that I find vital to my everyday API usage and development.',
        ],
        'magento-2-modernizing-an-open-source-ecommerce-powerhouse' => [
            'code' => 'magento-2-modernizing-an-open-source-ecommerce-powerhouse',
            'title' => 'Magento 2 > 1: Modernizing an Open Source eCommerce Powerhouse',
            'speaker' => 'ben-marks',
            'tags' => ['magento', 'ecommerce', 'framework'],
            'type' => 'session',
            'room' => 'main',
            'time' => NULL,
            'length' => 50,
            'description' => 'Whether you work with it daily, infrequently, or never, Magento 1 has been the ascendant PHP eCommerce platform for five years. The Magento 2 era is now upon us, featuring an updated architecture with full, configurable DI, aspect-oriented programming, and a truly decoupled, Composer-based system of modules which allows Magento components to be integrated into PHP app environments. This talk looks at some of the improvements and remaining challenges facing Magento 2.x on its way to a GA release and informs participants on how to get involved with the development and documentation on GitHub.',
        ],
        'monolith-to-microservices-lessons-from-the-trenches' => [
            'code' => 'monolith-to-microservices-lessons-from-the-trenches',
            'title' => 'Monolith to Microservices: Lessons from the Trenches',
            'speaker' => 'luke-kysow',
            'tags' => ['microservices', 'soa', 'scaling', 'architecture'],
            'type' => 'session',
            'room' => 'main',
            'time' => NULL,
            'length' => 50,
            'description' => 'Hootsuite is undergoing an architectural transformation. We\'re moving from our large monolithic PHP app to a microservices architecture. Microservices hold the promise of faster performance scaling, reduced technical debt, higher reliability, and increased speed of innovation, however the journey to get there isn\'t easy. How do you carve out parts of your app, rebuild them as services, and then switch to using those services, all while the plane is still flying--without any downtime and without your users noticing.

In this talk I\'ll define what exactly a microservices architecture looks like, discuss its pros and cons, and speak about how to best partition your app into services. We\'ll then go over lessons learned at Hootsuite as we\'ve carved up our own app into microservices; what worked and what fell flat on its face.',
        ],
        'massively-scaling-wordpress-in-the-cloud-a-case-study' => [
            'code' => 'massively-scaling-wordpress-in-the-cloud-a-case-study',
            'title' => 'Massively Scaling WordPress in the Cloud - A Case Study',
            'speaker' => 'ben-lobaugh',
            'tags' => ['scaling', 'cloud', 'azure', 'wordpress', 'architecture'],
            'type' => 'session',
            'room' => 'main',
            'time' => NULL,
            'length' => 50,
            'description' => 'With over 23% of the web utilizing WordPress as a content management platform it has become a powerhouse, but can it scale? In this session I will show you how I leveraged the Azure Cloud with WordPress to scale a real client site to 10 million hits per hour.',
        ],
        'navigating-your-git-repository' => [
            'code' => 'navigating-your-git-repository',
            'title' => 'Navigating Your Git Repository',
            'speaker' => 'gemma-anible',
            'tags' => ['git', 'tools', 'graphs'],
            'type' => 'session',
            'room' => 'main',
            'time' => NULL,
            'length' => 50,
            'description' => 'You can git pull, merge, and even force-push with the best of them, but what\'s really going on in that .git folder? What\'s a commit, and how does it know where it came from? What does checking out a tag have to do with detaching your head, and why does rebase mess things up so thoroughly?

In this talk, we’ll get inside individual commits and learn to push them around, then zoom out to the whole repository. Come find out how Git\'s glorified game of Connect-the-Dots can improve the development workflow and collaboration opportunities for your whole team!',
        ],
        'phpspec-behat-two-testing-tools-that-write-code-for-you' => [
            'code' => 'phpspec-behat-two-testing-tools-that-write-code-for-you',
            'title' => 'PHPSpec & Behat: Two Testing Tools That Write Code For You',
            'speaker' => 'joshua-warren',
            'tags' => ['behat', 'phpspec', 'tdd', 'bdd', 'testing'],
            'type' => 'session',
            'room' => 'main',
            'time' => NULL,
            'length' => 50,
            'description' => 'PHPSpec and Behat are two amazing PHP tools that empower specification-driven development and behavior-driven development. These two tools combined can help you build test coverage, but many people don\'t realize they can also write much of your code for you. In this talk, we\'ll see what PHPSpec and Behat can do, through a series of examples and use cases. In other words, I heard you like to code, so I wrote code that writes code while you code.',
        ],
        'integrating-joomla-with-the-php-community' => [
            'code' => 'integrating-joomla-with-the-php-community',
            'title' => 'Integrating Joomla! with the PHP Community',
            'speaker' => 'michael-babker',
            'tags' => ['framework', 'joomla', 'modernize'],
            'type' => 'session',
            'room' => 'main',
            'time' => NULL,
            'length' => 50,
            'description' => 'After nearly a decade of growth and development, Joomla! has proven itself as a strong and mature platform to build everything from the simplest of blogs to the most complex e-commerce solutions. However, this platform has its weaknesses, including the technical debt of a decade of development and often requiring Joomla or extension specific solutions to solve common problems. Enter the Joomla! Framework.

By extracting the API that has powered the Joomla! CMS since its birth into standalone and modular packages, we enable developers to use an API they are already familiar with to create standalone applications specific to client needs. This also enables developers to more easily consume code written for and shared with the full PHP community. Lastly, we are now able to offer the core APIs powering Joomla for use in Drupal or Laravel based projects.

We’ll take a look at how lowering the barriers to using and developing with Joomla’s own code base enables the Joomla! code base to be integrated with other PHP projects and how these integrations lay the framework for a stronger and more flexible next generation CMS.',
        ],
        'an-introduction-to-containers-and-docker-for-php-developers' => [
            'code' => 'an-introduction-to-containers-and-docker-for-php-developers',
            'title' => 'An Introduction to Containers and Docker for PHP Developers',
            'speaker' => 'robert-mcfrazier',
            'tags' => ['docker', 'containers', 'vagrant', 'virtual-machines'],
            'type' => 'session',
            'room' => 'main',
            'time' => NULL,
            'length' => 50,
            'description' => 'In this session we will discuss the basics of containers and how to use Docker, running in a Vagrant VM to allow any PHP developer to create an extremely flexible development environment and also learn more about these powerful technologies.    Using a practical example of building a development environment allows you to create something other that a basic “hello world” example while learning about containers.',
        ],
        'talmudic-maxims-to-maximize-your-growth-as-a-software-developer' => [
            'code' => 'talmudic-maxims-to-maximize-your-growth-as-a-software-developer',
            'title' => 'Talmudic Maxims to Maximize Your Growth as a Software Developer',
            'speaker' => 'yitzchok-willroth',
            'tags' => ['career-growth', 'community', 'craftsmanship', 'leadership'],
            'type' => 'session',
            'room' => 'main',
            'time' => NULL,
            'length' => 50,
            'description' => 'You’ve been programming for a while now.    You’re beginning to feel that you’ve got a handle on things but at the same time can’t escape the feeling that you’ve somehow plateaued in your growth as a software developer.    In this talk Yitzchok, a rabbinic scholar and software developer, shares the “wisdom of the sages” as practical, actionable advice – strategies and tactics – that you can use to reinvigorate your growth as a software developer.',
        ],
        'building-extraordinary-packages' => [
            'code' => 'building-extraordinary-packages',
            'title' => 'Building Extraordinary Packages',
            'speaker' => 'phil-sturgeon',
            'tags' => ['composer', 'oop', 'packages', 'psr'],
            'type' => 'session',
            'room' => 'main',
            'time' => NULL,
            'length' => 50,
            'description' => 'Back in the day, we had PEAR packages. These were often very well written, but due to PEARs lack of popularity we ended up just using mega-frameworks and writing bundles, modules, cells and sparks for that framework. Since then Composer has been a bit of a savior, but the way in which we make these packages is still new and scary.

There are a lot of talks about building good code, and writing OOP well, but how do you make a Composer package that is as high in quality as you can? Things like SemVer, avoiding NIH syndrome verses knowing WHEN to fork or make a new package, responsible deprecation and loads more.

The League of Extraordinary Packages is a group of developers who have banded together to build solid, well tested PHP packages using modern coding standards. The name might be a little silly, but the group dedicates itself to active maintenance, handing over projects when a lead has to step aside, working together and an absolute dedication to following and supporting standards.',
        ],
        'why-are-databases-so-difficult' => [
            'code' => 'why-are-databases-so-difficult',
            'title' => 'Why are Databases so &#%-ing Difficult!?',
            'speaker' => 'dave-stokes',
            'tags' => ['sql', 'mysql', 'theory', 'database', 'rdms'],
            'type' => 'session',
            'room' => 'main',
            'time' => NULL,
            'length' => 50,
            'description' => 'Databases!    Why are they such a PITA!    Well, part of it is that SQL is a procedural language and PHP is Object Oriented/Procedural Language, so they don\'t mesh well.    A SQL query can be syntax perfect, look great, and have rotten performance so visual examinations are almost useless.    Database are designed to use set theory and too many programmers generate N+1 type programming errors because they do not think in sets. . This session covers the hows and the whys of databases & SQL so that you can use them to your best advantage.    Discover why database optimizers are like bad GPS systems, why the WHERE clause is the wrong place to trim queries, which heavy lifting functions are best for a database, and how to cleanly write PHP code to efficiently use databases.',
        ],
        'foundations-of-zend-framework-2' => [
            'code' => 'foundations-of-zend-framework-2',
            'title' => 'Foundations of Zend Framework 2',
            'speaker' => 'adam-culp',
            'tags' => ['zend-framework', 'framework'],
            'type' => 'session',
            'room' => 'main',
            'time' => NULL,
            'length' => 50,
            'description' => 'Adam Culp will give a basic intro to Zend Framework 2 (ZF2) and how to use the foundational pieces.    We will get a Zend Framework 2 application up and running quickly using the Zend Framework 2 Skeleton Application, and Zend Skeleton Module to add modules. Adam will also introduce some useful resources to help attendees continue learning on their own. The talk will give attendees enough information to get a jump start into using ZF2.',
        ],
        'refactoring-101' => [
            'code' => 'refactoring-101',
            'title' => 'Refactoring 101',
            'speaker' => 'adam-culp',
            'tags' => ['refactoring', 'code-quality'],
            'type' => 'session',
            'room' => 'main',
            'time' => NULL,
            'length' => 50,
            'description' => 'We hate to refactor. (The practice of altering code to make it cleaner, simpler, and sometimes faster, while not altering functionality.) Adam Culp will talk about how to do it better, and will discuss: When to refactor. How to refactor. Why refactor. How a refactor can help us write better code in the future. A common methodology and steps to follow while refactoring, and resources to help us all on our refactor journey.',
        ],
        'smelly-tests' => [
            'code' => 'smelly-tests',
            'title' => 'Smelly Tests',
            'speaker' => 'chris-hartjes',
            'tags' => ['testing', 'modernize'],
            'type' => 'session',
            'room' => 'main',
            'time' => NULL,
            'length' => 50,
            'description' => 'You\'re now writing unit tests for your code...but you can\'t help but wonder if you are writing them the Right Way(tm). Given that learning to write good tests is no different from learning to write good code, it\'s inevitable that we make mistakes as we learn to create effective unit test suites.
In this talk testing evangelist Chris Hartjes talks about his own experiences in learning how to create good test cases by showing people examples of where things might not have gone the way the developer expected.',
        ],
        'composer-stability-and-semantic-versioning-demystified' => [
            'code' => 'composer-stability-and-semantic-versioning-demystified',
            'title' => 'Composer: Stability and Semantic Versioning Demystified',
            'speaker' => 'beau-simensen',
            'tags' => ['semver', 'composer', 'dependency-management'],
            'type' => 'session',
            'room' => 'main',
            'time' => NULL,
            'length' => 50,
            'description' => 'Understanding stability and semantic versioning makes a huge impact on daily life with Composer. Learn how to decode Composer\'s solver errors, get a better understanding of semantic versioning, how dependencies interact with each other when it comes to stability, and how to use Composer features like branch aliases to make things run more smoothly.',
        ],
        'hello-psr-7' => [
            'code' => 'hello-psr-7',
            'title' => 'Hello, PSR-7',
            'speaker' => 'beau-simensen',
            'tags' => ['psr', 'http'],
            'type' => 'session',
            'room' => 'main',
            'time' => NULL,
            'length' => 50,
            'description' => 'PSR-7 HTTP Message Interface has been kicking around in one form or another since March of 2012. Get a brief history of how PSR-7 evolved from its humble beginnings as a simple HTTP client interface to the game-changing PHP-FIG proposal we have today. Learn how to work with the HTTP Message Interfaces and how they will be used by frameworks in the not to distant future. Find out what it will mean to have a healthy ecosystem of PHP software all speak HTTP the same way. Say hello to your new best friend in PHP, PSR-7.',
        ],
        'inside-laravel-5.1' => [
            'code' => 'inside-laravel-5.1',
            'title' => 'Inside Laravel 5.1',
            'speaker' => 'yitzchok-willroth',
            'tags' => ['framework', 'laravel'],
            'type' => 'session',
            'room' => 'main',
            'time' => NULL,
            'length' => 50,
            'description' => 'One of PHP\'s most popular frameworks has undergone a major version upgrade! Join us to explore what\'s new in Laravel 5.0. We\'ll explore putting your Controllers on a crash diet with Custom Request Objects and Method Level Dependency Injection, increasing contexuality with Route & Event Annotations, managing 3rd party authentication with Socialite, understanding the new Directory Structure and Service Provider Architecture, leveraging FlySystem Integration, improving performance with Route Caching and increasing decoupling using Contracts. Special attention will be given to contributing to the framework using the exciting new contribution tool, Liferaft.',
        ],
        'demystifying-the-rest-api' => [
            'code' => 'demystifying-the-rest-api',
            'title' => 'Demystifying the REST API',
            'speaker' => 'samantha-quinones',
            'tags' => ['rest', 'api', 'computer-science', 'architecture'],
            'type' => 'session',
            'room' => 'main',
            'time' => NULL,
            'length' => 50,
            'description' => 'Are you confused by REST APIs? Can\'t tell a PUT from a POST? No idea what a non-idempotent operation is? Despite their ubiquity, the details of what makes an API RESTful are often lost even on experienced developers. We\'ll cover the basics of the HTTP protocol that drives most REST services, break down the lingo, and clear up some misconceptions about this powerful and popular methodology.',
        ],
        'drinking-from-the-firehose' => [
            'code' => 'drinking-from-the-firehose',
            'title' => 'Drinking from the Firehose - Real-time Metrics',
            'speaker' => 'samantha-quinones',
            'tags' => ['big-data', 'metrics', 'queues', 'elasticsearch', 'hadoop', 'aws'],
            'type' => 'session',
            'room' => 'main',
            'time' => NULL,
            'length' => 50,
            'description' => 'To understand an application’s performance, first you have to know what to measure. That’s the easy part. How do you take those measurements? Store them? Analyze them? Get them to the people who need them? Well, that’s where things get complicated, especially in the    high-traffic distributed systems of the modern web! Like careful scientists, we must observe our subjects without altering them, and we must report our findings quickly so that we have the data necessary to make smart choices about the health and growth of the system.

Let’s explore the lessons learned by engineers at one of the world’s top web companies in their quest to find meaning at 5 MB/s. We’ll discuss the tools and techniques that enable the collection, indexing, and analysis of billions or more datapoints each hour, and learn how these same approaches can empower your applications and your business, no matter the scale.',
        ],
        'making-the-world-a-smarter-place-through-iot' => [
            'code' => 'making-the-world-a-smarter-place-through-iot',
            'title' => 'Making the World a Smarter Place through IoT',
            'speaker' => 'josh-holmes',
            'tags' => ['iot', 'cloud', 'azure'],
            'type' => 'session',
            'room' => 'main',
            'time' => NULL,
            'length' => 50,
            'description' => <<<DESC
There’s a ton of buzz and hype around the internet of things (IoT) but what is it actually? IoT is the next evolution of
distributed and connected systems at scale. It’s more than just connecting your phone to your thermostat, it’s about
connected systems at scale so devices and people can interact in ways that was the realm of sci-fi just a few years ago.
It gets interesting when devices are connected and able to inform and act based on their own environment and from an
outside perspective, the world is just a smarter place. In this session, we’ll discuss what IoT actually means and how
it’s different (or not) from the connected systems of the past and dive into some implementation details with various
devices connected to the Azure IoT platform on the backend.
DESC
        ],
        'nosql-lightning-talks' => [
            'code' => 'nosql-lightning-talks',
            'title' => 'NoSQL Lightning Talks',
            'speaker' => ['robert-mcfrazier', 'jeremy-mikola', 'dave-stokes'],
            'tags' => ['database', 'nosql', 'mongodb', 'mysql', 'dynamodb', 'cassandra'],
            'type' => 'session',
            'room' => 'main',
            'time' => NULL,
            'length' => 50,
            'description' => <<<DESC
Lightning talks about NoSQL databases. More details coming soon.
DESC
        ],
        'git-and-github-for-php-projects' => [
            'code' => 'git-and-github-for-php-projects',
            'title' => 'Git and GitHub for PHP Projects',
            'speaker' => 'beau-simensen',
            'tags' => ['database', 'nosql', 'mongodb', 'mysql', 'dynamodb', 'cassandra'],
            'type' => 'workshop',
            'room' => 'main',
            'time' => NULL,
            'length' => 180,
            'description' => <<<DESC
Thanks largely to Composer and its tight integration with GitHub, it has never been easier for people to share and
contribute to the PHP ecosystem. These days it more or less required that contributors have a working knowledge of Git
and GitHub to be effective. Thankfully, learning how to use Git and GitHub doesn't have to be scary. Whether you're new
to Git, still using Subversion, or don't have any experience with version control systems, this workshop will get you
started using Git and GitHub so that you can start contributing back to your favorite PHP projects!
DESC
        ],
        'using-the-aws-sdk-for-php' => [
            'code' => 'using-the-aws-sdk-for-php',
            'title' => 'Using Version 3 of the AWS SDK for PHP',
            'speaker' => 'jeremy-lindblom',
            'tags' => ['aws', 'async', 'psr', 'http', 'guzzle', 'cloud'],
            'type' => 'hackathon',
            'room' => 'main',
            'time' => NULL,
            'length' => 50,
            'description' => <<<DESC
More details coming soon.
DESC
        ],
        'speaking-for-speakers' => [
            'code' => 'speaking-for-speakers',
            'title' => 'Speaking for Speakers',
            'speaker' => 'josh-holmes',
            'tags' => ['speaking'],
            'type' => 'workshop',
            'room' => 'main',
            'time' => NULL,
            'length' => 180,
            'description' => <<<DESC
More details coming soon.
DESC
        ],
        'clean-application-development' => [
            'code' => 'clean-application-development',
            'title' => 'Clean Application Development',
            'speaker' => 'adam-culp',
            'tags' => ['code-quality'],
            'type' => 'workshop',
            'room' => 'main',
            'time' => NULL,
            'length' => 180,
            'description' => <<<DESC
More details coming soon.
DESC
        ],
        'code-review-for-security' => [
            'code' => 'code-review-for-security',
            'title' => 'Code Review for Security',
            'speaker' => 'anthony-ferrara',
            'tags' => ['security'],
            'type' => 'workshop',
            'room' => 'main',
            'time' => NULL,
            'length' => 180,
            'description' => <<<DESC
More details coming soon.
DESC
        ],
        'php-embark' => [
            'code' => 'php-embark',
            'title' => 'PHP Embark',
            'speaker' => 'davey-shafik',
            'tags' => ['php', 'mysql'],
            'type' => 'workshop',
            'room' => 'main',
            'time' => NULL,
            'length' => 180,
            'description' => <<<DESC
More details coming soon.
DESC
        ],
    ],
	'sponsors' => [
		'nexcess' => [
			'name' => 'Nexcess',
			'code' => 'nexcess',
			'level' => 'platinum',
			'rank' => 100,
			'label' => 'Platinum',
			'description' => 'Platinum-level Sponsor',
			'url' => 'https://www.nexcess.net/',
			'logo' => 'img/logos/nexcess.jpg',
			'about' => <<<DESC
Coming soon.
DESC
		],
		'tableau' => [
			'name' => 'Tableau',
			'code' => 'tableau',
			'level' => 'platinum',
			'rank' => 96,
			'label' => 'Platinum',
			'description' => 'Platinum-level Sponsor',
			'url' => 'http://www.tableau.com/',
			'logo' => 'img/logos/tableu.jpg',
			'about' => <<<DESC
Tableau is one of the fastest-growing technology companies in the world. Our mission is simple: we help people see and
understand their data. We currently serve everyone from the executive suites of Fortune 500 companies to the jungles of
Central America, from immunology research labs to high school robotics club meetings. Our software can be found anywhere
people have data and questions. Tableau's culture is casual and high-energy. We value work/life balance, efficiency,
simplicity, freakishly friendly customer service, and making a difference in the world.
DESC
		],
		'aws' => [
			'name' => 'Amazon Web Services',
			'code' => 'aws',
			'level' => 'gold',
			'rank' => 92,
			'label' => 'Hackathon',
			'description' => 'Hackathon Sponsor',
			'url' => 'http://aws.amazon.com/',
			'logo' => 'img/logos/aws.jpg',
			'about' => <<<DESC
Coming soon.
DESC
		],
		'mysql' => [
			'name' => 'MySQL',
			'code' => 'mysql',
			'level' => 'gold',
			'rank' => 88,
			'label' => 'Gold',
			'description' => 'Gold-level Sponsor',
			'url' => 'http://www.mysql.com/',
			'logo' => 'img/logos/mysql.jpg',
			'about' => <<<DESC
MySQL is the world's most popular open source database. With its proven cost-effective delivery, ease-of-use,
performance, and scalability, MySQL has become the leading database choice for Web-based applications, used by high
profile web properties including Facebook, Twitter, YouTube, Yahoo!, and many more. Visit
<a href="http://www.mysql.com">http://www.mysql.com</a> today!
DESC
		],
		'joomla' => [
			'name' => 'Joomla',
			'code' => 'joomla',
			'level' => 'gold',
			'rank' => 84,
			'label' => 'Gold',
			'description' => 'Gold-level Sponsor',
			'url' => 'http://www.joomla.org/',
			'logo' => 'img/logos/joomla.jpg',
			'about' => <<<DESC
Joomla is an award-winning content management system (CMS), which enables you to build Web sites and powerful online
applications. Many aspects, including its ease-of-use and extensibility, have made Joomla the most popular website
software available. Best of all, Joomla is an open source solution that is freely available to everyone. Many companies
and organizations have requirements that go beyond what is available in the basic Joomla package. In those cases,
Joomla's powerful application framework makes it easy for developers to create sophisticated add-ons that extend the
power of Joomla into virtually unlimited directions.
DESC
		],
		'mandrill' => [
			'name' => 'Mandrill',
			'code' => 'mandrill',
			'level' => 'gold',
			'rank' => 80,
			'label' => 'Party',
			'description' => 'Party Sponsor',
			'url' => 'http://www.mandrill.com/',
			'logo' => 'img/logos/mandrill.jpg',
			'about' => <<<DESC
Coming soon.
DESC
		],
		'ispottv' => [
			'name' => 'iSpot.tv',
			'code' => 'ispottv',
			'level' => 'silver',
			'rank' => 76,
			'label' => 'Silver',
			'description' => 'Silver-level Sponsor',
			'url' => 'http://www.ispot.tv/',
			'logo' => 'img/logos/ispottv.jpg',
			'about' => <<<DESC
Coming soon.
DESC
		],
        'alegion' => [
            'name' => 'ALegion',
            'code' => 'alegion',
            'level' => 'silver',
            'rank' => 72,
            'label' => 'Silver',
            'description' => 'Silver-level Sponsor',
            'url' => 'http://alegion.com/',
            'logo' => 'img/logos/alegion.jpg',
            'about' => <<<DESC
Coming soon.
DESC
        ],
        'tune' => [
            'name' => 'TUNE',
            'code' => 'tune',
            'level' => 'silver',
            'rank' => 68,
            'label' => 'Lunch',
            'description' => 'Lunch Sponsor',
            'url' => 'http://www.tune.com',
            'logo' => 'img/logos/tune.jpg',
            'about' => <<<DESC
Coming soon.
DESC
        ],
        'engineyard' => [
            'name' => 'Engine Yard',
            'code' => 'engineyard',
            'level' => 'silver',
            'rank' => 64,
            'label' => 'Video',
            'description' => 'Video Sponsor',
            'url' => 'http://www.engineyard.com',
            'logo' => 'img/logos/engineyard.jpg',
            'about' => <<<DESC
Coming soon.
DESC
        ],
        'roberthalf' => [
            'name' => 'Robert Half',
            'code' => 'roberthalf',
            'level' => 'bronze',
            'rank' => 60,
            'label' => 'Bronze',
            'description' => 'Bronze-level Sponsor',
            'url' => 'http://www.roberthalf.com/seattle-tacoma',
            'logo' => 'img/logos/roberthalf.jpg',
            'about' => <<<DESC
Coming soon.
DESC
        ],
        'in2it' => [
            'name' => 'In2it',
            'code' => 'in2it',
            'level' => 'bronze',
            'rank' => 56,
            'label' => 'Bronze',
            'description' => 'Bronze-level Sponsor',
            'url' => 'http://www.in2it.be',
            'logo' => 'img/logos/in2it.jpg',
            'about' => <<<DESC
Coming soon.
DESC
        ],
        'digitalocean' => [
            'name' => 'Digital Ocean',
            'code' => 'digitalocean',
            'level' => 'bronze',
            'rank' => 48,
            'label' => 'Lanyard',
            'description' => 'Lanyard Sponsor',
            'url' => 'https://www.digitalocean.com/',
            'logo' => 'img/logos/digitalocean.jpg',
            'about' => <<<DESC
Coming soon.
DESC
        ],
        'roave' => [
            'name' => 'Roave',
            'code' => 'roave',
            'level' => 'bronze',
            'rank' => 54,
            'label' => 'Bronze',
            'description' => 'Bronze-level Sponsor',
            'url' => 'https://roave.com/',
            'logo' => 'img/logos/roave.jpg',
            'about' => <<<DESC
Coming soon.
DESC
        ],
        'creatuity' => [
            'name' => 'Creatuity',
            'code' => 'creatuity',
            'level' => 'bronze',
            'rank' => 62,
            'label' => 'Bronze',
            'description' => 'Bronze-level Sponsor',
            'url' => 'http://www.creatuity.com',
            'logo' => 'img/logos/creatuity.jpg',
            'about' => <<<DESC
Coming soon.
DESC
        ],
        'coolblueweb' => [
            'name' => 'coolblueweb',
            'code' => 'coolblueweb',
            'level' => 'copper',
            'rank' => 36,
            'label' => 'Copper',
            'description' => 'Copper-level Sponsor',
            'url' => 'http://www.coolblueweb.com/php',
            'logo' => 'img/logos/coolblueweb.jpg',
            'about' => <<<DESC
Coming soon.
DESC
        ],
//        'mercutio' => [
//            'name' => 'Mercutio',
//            'code' => 'mercutio',
//            'level' => 'silver',
//            'rank' => 74, // 2500
//            'label' => 'T-Shirt',
//            'description' => 'T-Shirt Sponsor',
//            'url' => 'http://getmercutio.com',
//            'logo' => 'img/logos/mercutio.jpg',
//            'about' => <<<DESC
//Coming soon.
//DESC
//        ],
        'gosolid' => [
            'name' => 'GoSolid',
            'code' => 'gosolid',
            'level' => 'bronze',
            'rank' => 63, // 1500
            'label' => 'Bronze',
            'description' => 'Bronze-level Sponsor',
            'url' => 'http://www.gosolid.net/',
            'logo' => 'img/logos/gosolid.jpg',
            'about' => <<<DESC
Coming soon.
DESC
        ],
        'clarify' => [
            'name' => 'Clarify',
            'code' => 'clarify',
            'level' => 'bronze',
            'rank' => 40,
            'label' => 'Bronze',
            'description' => 'Bronze-level Sponsor',
            'url' => 'http://clarify.io/',
            'logo' => 'img/logos/clarify.jpg',
            'about' => <<<DESC
Coming soon.
DESC
        ],
        'joule' => [
            'name' => 'Joule',
            'code' => 'joule',
            'level' => 'copper',
            'rank' => 20,
            'label' => 'Copper',
            'description' => 'Copper-level Sponsor',
            'url' => 'http://joule.club/',
            'logo' => 'img/logos/joule.jpg',
            'about' => '',
        ],
	],
    'communitySponsors' => [
        'devhell' => [
            'name' => '/dev/hell',
            'code' => 'devhell',
            'rank' => 100,
            'url' => 'http://devhell.info/',
            'logo' => 'img/logos/devhell.jpg',
            'type' => 'podcast',
        ],
        'sunshinephp' => [
            'name' => 'Sunshine PHP Conference',
            'code' => 'sunshinephp',
            'rank' => 95,
            'url' => 'http://2015.sunshinephp.com/',
            'logo' => 'img/logos/sunshinephp.jpg',
            'type' => 'conference',
        ],
        'dallasphp' => [
            'name' => 'Dallas PHP Group',
            'code' => 'dallasphp',
            'rank' => 90,
            'url' => 'http://www.meetup.com/dallasphp/',
            'logo' => 'img/logos/dallasphp.jpg',
            'type' => 'group',
        ],
        'nomadphp' => [
            'name' => 'NomadPHP',
            'code' => 'nomadphp',
            'rank' => 85,
            'url' => 'http://nomadphp.com',
            'logo' => 'img/logos/nomadphp.jpg',
            'type' => 'group',
        ],
        'apibook' => [
            'name' => 'Practical Approach to API design',
            'code' => 'apibook',
            'rank' => 80,
            'url' => 'https://leanpub.com/restful-api-design',
            'logo' => 'img/logos/practicalapproachtoapidesign.jpg',
            'type' => 'book',
        ],
        'thatpodcast' => [
            'name' => 'That Podcast',
            'code' => 'thatpodcast',
            'rank' => 75,
            'url' => 'http://thatpodcast.io/pnwphp15/',
            'logo' => 'img/logos/thatpodcast.jpg',
            'type' => 'podcast',
        ],
        'looselycoupled' => [
            'name' => 'Loosely Coupled Podcast',
            'code' => 'looselycoupled',
            'rank' => 70,
            'url' => 'http://looselycoupled.info/',
            'logo' => 'img/logos/looselycoupled.jpg',
            'type' => 'podcast',
        ],
        'phpbard' => [
            'name' => '@phpbard',
            'code' => 'phpbard',
            'rank' => 65,
            'url' => 'http://phpbard.tumblr.com/',
            'logo' => 'img/logos/phpbard.jpg',
            'type' => '@phpbard',
        ],
        'madisonphp' => [
            'name' => 'Madison PHP Conference',
            'code' => 'madisonphp',
            'rank' => 60,
            'url' => 'http://2015.madisonphpconference.com/',
            'logo' => 'img/logos/madisonphp.jpg',
            'type' => 'conference',
        ],
        'bootsnipp' => [
            'name' => 'Bootsnipp',
            'code' => 'bootsnipp',
            'rank' => 55,
            'url' => 'http://bootsnipp.com',
            'logo' => 'img/logos/bootsnipp.jpg',
            'type' => 'website',
        ],
        'sculpin' => [
            'name' => '/dev/hell Podcast',
            'code' => 'sculpin',
            'rank' => 50,
            'url' => 'http://sculpin.io/',
            'logo' => 'img/logos/sculpin.jpg',
            'type' => 'project',
        ],
        'wurstcon' => [
            'name' => 'WurstCon',
            'code' => 'wurstcon',
            'rank' => 45,
            'url' => 'http://wurstcon.com',
            'logo' => 'img/logos/wurstcon.jpg',
            'type' => 'sausage',
        ],
        'austinphp' => [
            'name' => 'Austin PHP',
            'code' => 'austinphp',
            'rank' => 40,
            'url' => 'http://www.meetup.com/austinphp/',
            'logo' => 'img/logos/austinphp.jpg',
            'type' => 'group',
        ],
    ],
   'hotels' => [
        'hotel-max' =>  [
            'name' => 'Hotel Max',
            'address' => '620 Stewart St.',
            'address2' => '',
            'city' => 'Seattle',
            'state' => 'WA',
            'zipcode' => '98101',
            'tel' => '206-728-6299',
            'url' => 'http://www.hotelmaxseattle.com/',
            'twitter_url' => 'https://twitter.com/hotel_max',
            'facebook_url' => 'https://www.facebook.com/hotelmaxseattle',
            'distance' => '1.2 miles',
        ],
        'mayflower-park-hotel' =>  [
            'name' => 'Mayflower Park Hotel',
            'address' => '405 Olive Way',
            'address2' => '',
            'city' => 'Seattle',
            'state' => 'WA',
            'zipcode' => '98101',
            'tel' => '800-426-5100',
            'url' => 'http://www.mayflowerpark.com/',
            'twitter_url' => 'http://twitter.com/mayflowerpark',
            'facebook_url' => 'https://www.facebook.com/MayflowerPark',
            'distance' => '1.1 miles',
        ],
        'courtyard-marriot' =>  [
            'name' => 'Courtyard Marriot',
            'address' => '612 2nd Avenue',
            'address2' => '',
            'city' => 'Seattle',
            'state' => 'WA',
            'zipcode' => '98104',
            'tel' => '206-625-1111',
            'url' => 'http://www.marriott.com/hotels/travel/seaps-courtyard-seattle-downtown-pioneer-square/',
            'twitter_url' => '',
            'facebook_url' => '',
            'distance' => '0.2 mile',
        ],
        'moore-hotel' =>  [
            'name' => 'Moore Hotel',
            'address' => '1926 2nd Avenue',
            'address2' => '',
            'city' => 'Seattle',
            'state' => 'WA',
            'zipcode' => '98101',
            'tel' => '800-421-5508',
            'url' => 'http://www.moorehotel.com/',
            'twitter_url' => '',
            'facebook_url' => '',
            'distance' => '1.0 mile',
        ],
        'hilton-seattle' =>  [
            'name' => 'Hilton Seattle',
            'address' => '1301 6th Ave',
            'address2' => '',
            'city' => 'Seattle',
            'state' => 'WA',
            'zipcode' => '98101-2304',
            'tel' => '206-624-0500',
            'url' => 'http://www3.hilton.com/en/hotels/washington/hilton-seattle-SEASHHF/index.html',
            'twitter_url' => '',
            'facebook_url' => '',
            'distance' => '0.8 mile',
        ],
        'westin-seattle' =>  [
            'name' => 'Westin Seattle',
            'address' => '1900 5th Avenue',
            'address2' => '',
            'city' => 'Seattle',
            'state' => 'WA',
            'zipcode' => '98101',
            'tel' => '206-728-1000',
            'url' => 'http://www.westinseattle.com/',
            'twitter_url' => '',
            'facebook_url' => 'http://www.facebook.com/TheWestinSeattleHotel',
            'distance' => '1.1 miles',
        ],
    ],
];
