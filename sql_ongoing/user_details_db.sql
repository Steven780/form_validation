/*-------------- Database: `users_details` --------------*/
/* Author: Steven Kinghorn
   Creation Date:   05/Feb/2015	
*/


/* This table will hold all the users details */

CREATE TABLE `site_members` (
  `id` int(11) NOT NULL auto_increment,
  `first_name` varchar(32) collate utf8_unicode_ci NOT NULL default '',
  `surname` varchar(32) collate utf8_unicode_ci NOT NULL default '',
  `email` varchar(255) collate utf8_unicode_ci NOT NULL default '',
  `telephone` int(11) NOT NULL,
  `gender` bool,
  `dob` datetime NOT NULL default '0000-00-00 00:00:00',
  `comments` varchar(255) collate utf8_unicode_ci default ''

  PRIMARY KEY  (`id`),
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*------------------Steven Kinghorn (05-Feb-2015)--------------------------------------*/
