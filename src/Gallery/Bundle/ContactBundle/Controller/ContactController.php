<?php

/*
 * This file is part of the gallery package.
 *
 * (c) Elliot Wright <elliot@elliotwright.co>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gallery\Bundle\ContactBundle\Controller;

use Gallery\Bundle\CoreBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Contact Controller
 *
 * @author Elliot Wright <elliot@elliotwright.co>
 */
class ContactController extends Controller
{
    /**
     * View contact page action.
     *
     * @return Response
     */
    public function viewAction()
    {
        return $this->render('GalleryContactBundle:Contact:view.html.twig');
    }
}
