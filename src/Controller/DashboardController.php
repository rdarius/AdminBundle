<?php

declare(strict_types=1);

namespace Platform\Bundle\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class DashboardController
{
    /**
     * @var Environment
     */
    private Environment $templating;

    /**
     * DashboardController constructor.
     *
     * @param Environment $templating
     */
    public function __construct(Environment $templating)
    {
        $this->templating = $templating;
    }

    /**
     * @throws RuntimeError
     * @throws SyntaxError
     * @throws LoaderError
     */
    public function indexAction(): Response
    {
        return new Response($this->templating->render('@PlatformAdmin/Dashboard/index.html.twig'));
    }
}
