<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/css')) {
            if (0 === strpos($pathinfo, '/css/d20475a')) {
                // _assetic_d20475a
                if ($pathinfo === '/css/d20475a.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd20475a',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_d20475a',);
                }

                if (0 === strpos($pathinfo, '/css/d20475a_')) {
                    // _assetic_d20475a_0
                    if ($pathinfo === '/css/d20475a_proposal_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'd20475a',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_d20475a_0',);
                    }

                    if (0 === strpos($pathinfo, '/css/d20475a_b')) {
                        // _assetic_d20475a_1
                        if ($pathinfo === '/css/d20475a_base_2.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'd20475a',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_d20475a_1',);
                        }

                        // _assetic_d20475a_2
                        if ($pathinfo === '/css/d20475a_button_3.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'd20475a',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_d20475a_2',);
                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/css/140a154')) {
                // _assetic_140a154
                if ($pathinfo === '/css/140a154.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '140a154',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_140a154',);
                }

                // _assetic_140a154_0
                if ($pathinfo === '/css/140a154_bootstrap.min_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '140a154',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_140a154_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/e3b9ef0')) {
            // _assetic_e3b9ef0
            if ($pathinfo === '/js/e3b9ef0.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'e3b9ef0',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_e3b9ef0',);
            }

            if (0 === strpos($pathinfo, '/js/e3b9ef0_')) {
                // _assetic_e3b9ef0_0
                if ($pathinfo === '/js/e3b9ef0_jquery.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e3b9ef0',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_e3b9ef0_0',);
                }

                // _assetic_e3b9ef0_1
                if ($pathinfo === '/js/e3b9ef0_collapse_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e3b9ef0',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_e3b9ef0_1',);
                }

                // _assetic_e3b9ef0_2
                if ($pathinfo === '/js/e3b9ef0_transition_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e3b9ef0',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_e3b9ef0_2',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/3d30453')) {
            // _assetic_3d30453
            if ($pathinfo === '/css/3d30453.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '3d30453',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_3d30453',);
            }

            if (0 === strpos($pathinfo, '/css/3d30453_part_1_')) {
                if (0 === strpos($pathinfo, '/css/3d30453_part_1_font')) {
                    // _assetic_3d30453_0
                    if ($pathinfo === '/css/3d30453_part_1_font-awesome_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '3d30453',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_3d30453_0',);
                    }

                    // _assetic_3d30453_1
                    if ($pathinfo === '/css/3d30453_part_1_fonts_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '3d30453',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_3d30453_1',);
                    }

                }

                // _assetic_3d30453_2
                if ($pathinfo === '/css/3d30453_part_1_jquery.booklet.1.1.0_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '3d30453',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_3d30453_2',);
                }

                // _assetic_3d30453_3
                if ($pathinfo === '/css/3d30453_part_1_style_4.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '3d30453',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_3d30453_3',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/107c358')) {
            // _assetic_107c358
            if ($pathinfo === '/js/107c358.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '107c358',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_107c358',);
            }

            if (0 === strpos($pathinfo, '/js/107c358_')) {
                // _assetic_107c358_0
                if ($pathinfo === '/js/107c358_jquery-1.4.4.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '107c358',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_107c358_0',);
                }

                if (0 === strpos($pathinfo, '/js/107c358_part_2_')) {
                    // _assetic_107c358_1
                    if ($pathinfo === '/js/107c358_part_2_License_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '107c358',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_107c358_1',);
                    }

                    if (0 === strpos($pathinfo, '/js/107c358_part_2_jquery')) {
                        // _assetic_107c358_2
                        if ($pathinfo === '/js/107c358_part_2_jquery-1.4.4.min_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '107c358',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_107c358_2',);
                        }

                        if (0 === strpos($pathinfo, '/js/107c358_part_2_jquery.')) {
                            // _assetic_107c358_3
                            if ($pathinfo === '/js/107c358_part_2_jquery.booklet.1.1.0.min_3.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '107c358',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_107c358_3',);
                            }

                            // _assetic_107c358_4
                            if ($pathinfo === '/js/107c358_part_2_jquery.easing.1.3_4.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '107c358',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_107c358_4',);
                            }

                        }

                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/proposal')) {
            // proposal_web_default_proposal1
            if ($pathinfo === '/proposal1') {
                return array (  '_controller' => 'Proposal\\WebBundle\\Controller\\DefaultController::proposal1',  '_route' => 'proposal_web_default_proposal1',);
            }

            // proposal_web_default_proposal2
            if ($pathinfo === '/proposal2') {
                return array (  '_controller' => 'Proposal\\WebBundle\\Controller\\DefaultController::proposal2',  '_route' => 'proposal_web_default_proposal2',);
            }

        }

        // proposal_web_default_storybook
        if ($pathinfo === '/storybook') {
            return array (  '_controller' => 'Proposal\\WebBundle\\Controller\\DefaultController::storybook',  '_route' => 'proposal_web_default_storybook',);
        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
