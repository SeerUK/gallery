<?php

/*
 * This file is part of the gallery package.
 *
 * (c) Elliot Wright <elliot@elliotwright.co>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gallery\Bundle\SearchBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Intent Controller
 *
 * @author Elliot Wright <elliot@elliotwright.co>
 */
class IntentController extends Controller
{
    /**
     * Render intent bar
     *
     * @return Response
     */
    public function renderAction($advanced = false)
    {
        return $this->render('GallerySearchBundle:Intent:intent-bar.html.twig', [
            "advanced" => $advanced,
        ]);
    }
}
