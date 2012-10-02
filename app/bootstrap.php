<?php

/*
 * This file is part of Fork CMS.
 *
 * For the full copyright and license information, please view the license
 * file that was distributed with this source code.
 */

/*
 * Define services to be used throughout Fork CMS.
 *
 * @author Dieter Vanden Eynde <dieter@dieterve.be>
 */

use Symfony\Component\HttpFoundation\Request;

// You can optionally add an environment here, with debug status
// $kernel = new AppKernel('dev', true);
$kernel = new AppKernel();
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
