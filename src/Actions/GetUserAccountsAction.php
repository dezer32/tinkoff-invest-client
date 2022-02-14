<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Actions;

use Dezer\BaseHttpClient\Contracts\HttpActionInterface;
use Dezer\Investing\Tinkoff\ApiClient\AbstractBaseHttpAction;
use Dezer\Investing\Tinkoff\ApiClient\Dto\User\AccountsResponse;
use GuzzleHttp\Psr7\Response;

class GetUserAccountsAction extends AbstractBaseHttpAction
{
    public function getMethod(): string
    {
        return HttpActionInterface::GET;
    }

    public function getUri(): string
    {
        return 'user/accounts';
    }

    public function mapResponse(Response $response): AccountsResponse
    {
        return new AccountsResponse($this->getJsonFromResponse($response));
    }
}
