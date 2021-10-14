<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Actions\Sandbox;

use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\BaseHttpClient\Exceptions\ResponseException;
use Dezer\TinkoffInvestApiClient\AbstractBaseHttpAction;
use Dezer\TinkoffInvestApiClient\Dto\EmptyResponse;
use Dezer\TinkoffInvestApiClient\Dto\Sandbox\Register as RegisterDto;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\RequestOptions;
use Spatie\DataTransferObject\Exceptions\UnknownProperties;

class RegisterAction extends AbstractBaseHttpAction
{
    public function __construct(
        private RegisterDto $register
    ) {
    }

    public function getMethod(): string
    {
        return HttpActionInterface::POST;
    }

    public function getUri(): string
    {
        return '/sandbox/register';
    }

    public function getOptions(): array
    {
        return [
            RequestOptions::JSON => $this->register->toArray(),
        ];
    }

    /**
     * @throws UnknownProperties
     * @throws ResponseException
     */
    public function mapResponse(Response $response): EmptyResponse
    {
        return new EmptyResponse($this->getJsonFromResponse($response));
    }
}
