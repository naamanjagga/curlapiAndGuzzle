<?php

namespace App\Components;
use GuzzleHttp\Client;
use SimpleXMLElement;

class Curlapi
{
    public function getSearch($city)
    {
        $url = "http://api.weatherapi.com/v1/search.json?key=0bab7dd1bacc418689b143833220304&q=$city";
        $response = $this->getUrl($url);
        return $response;
    }
    public function getForecast($city)
    {
        $url = "http://api.weatherapi.com/v1/forecast.json?key=0bab7dd1bacc418689b143833220304&q=$city&days=1&aqi=no&alerts=no";
        $response = $this->getUrl($url);
        return $response;
    }
    public function getHistory($city)
    {
        $url = "http://api.weatherapi.com/v1/history.json?key=0bab7dd1bacc418689b143833220304&q=$city&dt=2010-01-01";
        $response = $this->getUrl($url);
        return $response;
    }
    public function getCurrent($city)
    {
        
        $url = "http://api.weatherapi.com/v1/current.json?key=0bab7dd1bacc418689b143833220304&q=$city&aqi=no";
        $response = $this->getUrl($url);
        return $response;
    }
    public function getAstronomy($city)
    {
        $url = "http://api.weatherapi.com/v1/astronomy.json?key=0bab7dd1bacc418689b143833220304&q=$city&dt=2022-04-21";
        $response = $this->getUrl($url);
        return $response;
    }
    public function getTimezone($city)
    {
        $url = "http://api.weatherapi.com/v1/timezone.json?key=0bab7dd1bacc418689b143833220304&q=$city";
        $response = $this->getUrl($url);
        return $response;
    }
    public function getSports($city)
    {
        $url = "http://api.weatherapi.com/v1/sports.json?key=0bab7dd1bacc418689b143833220304&q=$city";
        $response = $this->getUrl($url);
        return $response;
    }
    public function getQuality($city)
    {
        $url = "http://api.weatherapi.com/v1/current.json?key=0bab7dd1bacc418689b143833220304&q=$city&aqi=yes";
        $response = $this->getUrl($url);
        return $response;
    }
    public function getAlert($city)
    {
        $url = "http://api.weatherapi.com/v1/forecast.json?key=0bab7dd1bacc418689b143833220304&q=$city&days=1&aqi=no&alerts=yes";
        $response = $this->getUrl($url);
        return $response;
    }
    public function getUrl($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        $res = curl_exec($ch);
        return json_decode($res, true);
        curl_close($ch);
    }
}
