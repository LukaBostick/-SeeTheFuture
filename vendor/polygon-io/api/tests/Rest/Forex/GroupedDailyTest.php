<?php

namespace PolygonIO\Tests\Rest\Forex;

use PolygonIO\Rest\Forex\GroupedDaily;
use PolygonIO\Tests\Concerns\LoadsStub;
use PolygonIO\Tests\Helpers\MocksHttp;

class GroupedDailyTest extends \PHPUnit\Framework\TestCase
{
    use MocksHttp;
    use LoadsStub;

    public function testGroupedDailyGetCall()
    {
        $requestsContainer = [];

        $groupedDaily = new GroupedDaily('fake-api-key');
        $groupedDaily->httpClient = $this->getHttpMock(
            $requestsContainer, $this->loadJsonStubFile('api/v2/aggs/grouped/locale/us/market/fx/2020-10-14.json')
        );

        $groupedDaily->get('2020-10-14');

        $this->assertPath($requestsContainer, '/v2/aggs/grouped/locale/us/market/fx/2020-10-14');
    }
}
