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

use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;
use Symfony\Component\HttpFoundation\Response;

/**
 * Controller
 *
 * @author Elliot Wright <elliot@elliotwright.co>
 */
abstract class Controller
{
    /**
     * @var EngineInterface
     */
    protected $templating;


    /**
     * Renders a view.
     *
     * @param string   $view       The view name
     * @param array    $parameters An array of parameters to pass to the view
     * @param Response $response   A response instance
     *
     * @return Response A Response instance
     */
    public function render($view, array $parameters = array(), Response $response = null)
    {
        return $this->templating->renderResponse($view, $parameters, $response);
    }

    /**
     * Get templating
     *
     * @return EngineInterface
     */
    public function getTemplating()
    {
        return $this->templating;
    }

    /**
     * Set templating
     *
     * @param mixed $templating
     *
     * @return Controller
     */
    public function setTemplating($templating)
    {
        $this->templating = $templating;

        return $this;
    }
}
