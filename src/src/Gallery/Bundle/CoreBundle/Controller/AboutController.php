<?php

/*
 * This file is part of the gallery package.
 *
 * (c) Elliot Wright <elliot@elliotwright.co>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gallery\Bundle\CoreBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

/**
 * About Controller
 *
 * @author Elliot Wright <elliot@elliotwright.co>
 */
class AboutController extends Controller
{
    /**
     * View homepage action.
     *
     * @return Response
     */
    public function viewAction()
    {
        return $this->render('GalleryCoreBundle:About:view.html.twig');
    }
}
