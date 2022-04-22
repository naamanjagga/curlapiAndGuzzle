<?php

declare(strict_types=1);

use Phalcon\Mvc\Controller;

class IndexController extends Controller
{

    public function indexAction()
    {
    }
    public function cityAction()
    {
        if (isset($_POST['btn'])) {
            $city = $_POST['city'];
            $response = $this->api->getSearch($city);
            $this->session->set('city', $response);
        }
        $value = $this->session->get('city');
        $this->view->response = $value;
    }
    public function weatherAction()
    {
        if (isset($_POST['getinfo'])) {
            $city = $_POST['getinfo'];
            $response = $this->api->getCurrent($city);
            $this->session->set('value', $response['location']['name']);
            $this->session->set('current', $response);
        }
        $value = $this->session->get('current');
        $this->view->response = $value;
    }
    public function forecastAction()
    {
        if (isset($_POST['forecast'])) {
            $city = $_POST['forecast'];
            $response = $this->api->getForecast($city);
            $this->session->set('forecast', $response);
        }

        $value = $this->session->get('forecast');
        $this->view->response = $value;
    }
    public function historyAction()
    {
        if (isset($_POST['history'])) {
            $city = $_POST['history'];
            $response = $this->api->getHistory($city);
            $this->session->set('history', $response);
        }
        $value = $this->session->get('history');
        $this->view->response = $value;
        $this->view->arg =  $this->session->get('value');
    }
    public function timezoneAction()
    {
        if (isset($_POST['timezone'])) {
            $city = $_POST['timezone'];
            $response = $this->api->getTimezone($city);
            $this->session->set('timezone', $response);
        }
        $value = $this->session->get('timezone');
        $this->view->response = $value;
    }
    public function sportsAction()
    {
        if (isset($_POST['sports'])) {
            $city = $_POST['sports'];
            $response = $this->api->getSports($city);
            $this->session->set('sports', $response);
        }
        $value = $this->session->get('sports');
        $this->view->response = $value;
        $this->view->arg =  $this->session->get('value');
    }
    public function astronomyAction()
    {
        if (isset($_POST['astronomy'])) {
            $city = $_POST['astronomy'];
            $response = $this->api->getAstronomy($city);
            $this->session->set('astronomy', $response);
        }
        $value = $this->session->get('astronomy');
        $this->view->response = $value;
    }
    public function alertAction()
    {
        if (isset($_POST['alert'])) {
            $city = $_POST['alert'];
            $response = $this->api->getAlert($city);
            $this->session->set('alert', $response);
        }
        $value = $this->session->get('alert');
        $this->view->response = $value;
    }
    public function qualityAction()
    {
        if (isset($_POST['quality'])) {
            $city = $_POST['quality'];
            $response = $this->api->getQuality($city);
            $this->session->set('quality', $response);
        }
        $value = $this->session->get('quality');
        $this->view->response = $value;
    }
}
