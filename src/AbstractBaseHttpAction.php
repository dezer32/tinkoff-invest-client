<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient;

use Dezer\BaseHttpClient\BaseHttpAction;
use Dezer\BaseHttpClient\Exceptions\RequestException;
use Dezer\BaseHttpClient\Exceptions\ResponseException;
use Dezer\TinkoffInvestApiClient\Dto\ErrorResponse;
use GuzzleHttp\Psr7\Response;
use JsonException;
use Spatie\DataTransferObject\Exceptions\UnknownProperties;

abstract class AbstractBaseHttpAction extends BaseHttpAction
{
    /**
     * @throws UnknownProperties
     * @throws RequestException
     */
    public function mapError(RequestException $e): ErrorResponse
    {
        if ($e->getResponse() !== null) {
            try {
                return new ErrorResponse($this->getJsonFromResponse($e->getResponse()));
            } catch (ResponseException $exception) {
                throw new RequestException(
                    $exception->getMessage(),
                    $exception->getCode(),
                    $e->getRequest(),
                    $e->getResponse(),
                    $e
                );
            }
        }

        throw $e;
    }

    /**
     * @param Response $response
     *
     * @return array
     * @throws ResponseException
     */
    protected function getJsonFromResponse(Response $response): array
    {
        $content = (string) $response->getBody();

        try {
            return json_decode($content, true, 512, JSON_THROW_ON_ERROR);
        } catch (JsonException $exception) {
            throw new ResponseException($exception->getMessage(), $exception->getCode(), $exception);
        }
    }
}