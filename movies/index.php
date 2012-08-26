<?php

/**
 * ownCloud - Movies App
 *
 * @author Frank Karlitschek
 * @copyright 2011 Frank Karlitschek karlitschek@kde.org
 * 
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
 * License as published by the Free Software Foundation; either 
 * version 3 of the License, or any later version.
 * 
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU AFFERO GENERAL PUBLIC LICENSE for more details.
 *  
 * You should have received a copy of the GNU Lesser General Public 
 * License along with this library.  If not, see <http://www.gnu.org/licenses/>.
 * 
 */

require_once('lib/movies.php');


OCP\User::checkLoggedIn();
OCP\JSON::checkAppEnabled('movies');
OCP\App::setActiveNavigationEntry( 'movies_index' );

OCP\Util::addStyle( 'movies', 'style' );


$list=\OCA_Movies\Storage::getMovies();
$tmpl = new OCP\Template('movies', 'movies', 'user');
$tmpl->assign('list', $list);
$tmpl->printPage();


