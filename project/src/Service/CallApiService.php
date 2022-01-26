<?php

namespace App\Service;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class CallApiService {
  
  private $client;
  
  public function __construct(HttpClientInterface $client)
  {
    $this->client = $client;
  }
  
  public function getFranceData(): array 
  {
    return $this->fetchApi('france');
  }
  
  public function getDepsData(): array
  {
    return $this->fetchApi('departements');
  }
  
  public function fetchApi(string $slug)
  {
    $response = $this->client->request(
      'GET',
      'https://coronavirusapifr.herokuapp.com/data/live/' . $slug
    );
    return $response->toArray();
  }
}