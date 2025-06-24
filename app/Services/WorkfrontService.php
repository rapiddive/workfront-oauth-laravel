<?php

namespace App\Services;

use App\Models\Settings;
use Illuminate\Support\Facades\Http;

class WorkfrontService
{
    protected $baseUrl;
    protected $token;

    protected $apiVersion = 'v20.0';

    public function __construct()
    {
        $this->baseUrl = config('services.workfront.url');
        $this->token = Settings::where('key', 'workfront_access_token')->value('value') ?? config('services.workfront.token');

    }

    public function getCustomForms($queueID)
    {
        return $this->request('get', "QUET/{$queueID}", [
            'fields' => '*,objectCategories:*',
        ]);
    }

    protected function request($method, $endpoint, $params = [])
    {
        $url = "{$this->baseUrl}/attask/api/{$this->apiVersion}/{$endpoint}";
        $response = Http::withHeaders(['sessionID' => $this->token])
            ->{$method}($url, $params)->json();

        return $response;
    }


    public function getCategoryFields($categoryID)
    {
        return $this->request('get', "category/{$categoryID}", [
            'fields' => '*,categoryParameters:*'
        ]);
    }

    public function getCategoryParam($paramID)
    {
        return $this->request('get', "PARAM/{$paramID}", [
            'fields' => '*,parameterOptions:*'
        ]);
    }

    public function createIssue($data)
    {
        return $this->request('post', 'OPTASK', $data);
    }
}
