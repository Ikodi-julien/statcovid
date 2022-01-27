<?php

namespace App\Service;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class CallApiService {
  
  private $client;
  
  public function __construct(HttpClientInterface $client)
  {
    $this->client = $client;
  }
  
  public function getFranceToday(): array 
  {
    return $this->fetchApi('live/france');
  }
  
  public function getAllDepsToday(): array
  {
    return $this->fetchApi('live/departements');
  }
  
  public function getOneDepToday($departement): array
  {
    return $this->fetchApi('live/departement/' . $departement );
  }
  
  public function getOneDepAllDatas($departement): array
  {
    return $this->fetchApi('departement/' . $departement );
  }

  public function fetchApi(string $slug)
  {
    $response = $this->client->request(
      'GET',
      'https://coronavirusapifr.herokuapp.com/data/' . $slug
    );
    return $response->toArray();
  }
}