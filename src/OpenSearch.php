<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\BindEsInstanceResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\BindESUserAnalyzerResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CompileSortScriptResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateABTestExperimentResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateABTestGroupResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateABTestSceneResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateAppGroupResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateAppRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateAppResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateDataCollectionResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateFirstRankRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateFirstRankResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateFunctionInstanceRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateFunctionInstanceResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateFunctionTaskResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateInterventionDictionaryResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateModelResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateQueryProcessorRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateQueryProcessorResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateScheduledTaskResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateSearchStrategyResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateSecondRankRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateSecondRankResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateSortScriptResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateUserAnalyzerResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DeleteABTestExperimentResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DeleteABTestGroupResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DeleteABTestSceneResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DeleteFunctionInstanceResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DeleteModelResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DeleteSortScriptFileResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DeleteSortScriptResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeABTestExperimentResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeABTestGroupResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeABTestSceneResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppGroupDataReportRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppGroupDataReportResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppGroupResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppGroupStatisticsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppStatisticsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeDataCollctionResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeFirstRankResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeInterventionDictionaryResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeModelResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeQueryProcessorResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeRegionResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeScheduledTaskResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeSecondRankResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeSlowQueryStatusResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeUserAnalyzerRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeUserAnalyzerResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DisableSlowQueryResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\EnableSlowQueryResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GenerateMergedTableRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GenerateMergedTableResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetDomainRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetDomainResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetFunctionCurrentVersionRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetFunctionCurrentVersionResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetFunctionDefaultInstanceResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetFunctionInstanceRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetFunctionInstanceResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetFunctionVersionResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetModelProgressResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetModelReportResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetScriptFileNamesResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetSearchStrategyResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetSortScriptFileResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetSortScriptResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetValidationErrorRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetValidationErrorResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetValidationReportRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetValidationReportResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListABTestExperimentsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListABTestFixedFlowDividersResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListABTestGroupsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListABTestMetricsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListABTestScenesResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListAppGroupErrorsRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListAppGroupErrorsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListAppGroupMetricsRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListAppGroupMetricsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListAppGroupsRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListAppGroupsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListAppsRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListAppsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListDataCollectionsRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListDataCollectionsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListDataSourceTableFieldsRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListDataSourceTableFieldsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListDataSourceTablesRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListDataSourceTablesResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListDeployedAlgorithmModelsRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListDeployedAlgorithmModelsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListFirstRanksResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListFunctionInstancesRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListFunctionInstancesResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListFunctionTasksRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListFunctionTasksResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListInterventionDictionariesRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListInterventionDictionariesResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListInterventionDictionaryEntriesRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListInterventionDictionaryEntriesResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListInterventionDictionaryNerResultsRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListInterventionDictionaryNerResultsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListInterventionDictionaryRelatedEntitiesResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListModelsRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListModelsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListProceedingsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListQueryProcessorAnalyzerResultsRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListQueryProcessorAnalyzerResultsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListQueryProcessorNersRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListQueryProcessorNersResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListQueryProcessorsRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListQueryProcessorsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListQuotaReviewTasksRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListQuotaReviewTasksResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListRamRolesResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListScheduledTasksRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListScheduledTasksResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListSearchStrategiesResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListSecondRanksResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListSlowQueryCategoriesResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListSlowQueryQueriesResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListSortExpressionsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListSortScriptsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListStatisticLogsRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListStatisticLogsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListStatisticReportRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListStatisticReportResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListUserAnalyzerEntriesRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListUserAnalyzerEntriesResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListUserAnalyzersRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListUserAnalyzersResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ModifyAppGroupQuotaResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ModifyAppGroupResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ModifyFirstRankRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ModifyFirstRankResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ModifyModelResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ModifyQueryProcessorRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ModifyQueryProcessorResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ModifyScheduledTaskResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ModifySecondRankRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ModifySecondRankResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\PreviewModelRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\PreviewModelResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\PushInterventionDictionaryEntriesResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\PushUserAnalyzerEntriesResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\RankPreviewQueryResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ReleaseSortScriptResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\RemoveAppGroupResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\RemoveAppResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\RemoveDataCollectionResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\RemoveFirstRankResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\RemoveInterventionDictionaryResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\RemoveQueryProcessorResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\RemoveScheduledTaskResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\RemoveSearchStrategyResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\RemoveSecondRankResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\RemoveUserAnalyzerResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\RenewAppGroupResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ReplaceAppGroupCommodityCodeResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\SaveSortScriptFileResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\StartSlowQueryAnalyzerResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\TrainModelResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UnbindEsInstanceResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UnbindESUserAnalyzerResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateABTestExperimentResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateABTestFixedFlowDividersResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateABTestGroupResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateABTestSceneResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateFetchFieldsRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateFetchFieldsResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateFunctionDefaultInstanceRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateFunctionDefaultInstanceResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateFunctionInstanceRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateFunctionInstanceResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateSearchStrategyResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateSortScriptResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateSummariesRequest;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\UpdateSummariesResponse;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ValidateDataSourcesResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class OpenSearch extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('opensearch', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string   $productId
     * @param string   $regionId
     * @param string   $endpointRule
     * @param string   $network
     * @param string   $suffix
     * @param string[] $endpointMap
     * @param string   $endpoint
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param string $appGroupIdentity
     * @param string $esInstanceId
     *
     * @return BindESUserAnalyzerResponse
     */
    public function bindESUserAnalyzer($appGroupIdentity, $esInstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->bindESUserAnalyzerWithOptions($appGroupIdentity, $esInstanceId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $esInstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return BindESUserAnalyzerResponse
     */
    public function bindESUserAnalyzerWithOptions($appGroupIdentity, $esInstanceId, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $esInstanceId     = OpenApiUtilClient::getEncodeParam($esInstanceId);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'BindESUserAnalyzer',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/es/' . $esInstanceId . '/actions/bind-analyzer',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return BindESUserAnalyzerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     *
     * @return BindEsInstanceResponse
     */
    public function bindEsInstance($appGroupIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->bindEsInstanceWithOptions($appGroupIdentity, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return BindEsInstanceResponse
     */
    public function bindEsInstanceWithOptions($appGroupIdentity, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'BindEsInstance',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/actions/bind-es-instance',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return BindEsInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $scriptName
     * @param string $appVersionId
     *
     * @return CompileSortScriptResponse
     */
    public function compileSortScript($appGroupIdentity, $scriptName, $appVersionId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->compileSortScriptWithOptions($appGroupIdentity, $scriptName, $appVersionId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $scriptName
     * @param string         $appVersionId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CompileSortScriptResponse
     */
    public function compileSortScriptWithOptions($appGroupIdentity, $scriptName, $appVersionId, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $scriptName       = OpenApiUtilClient::getEncodeParam($scriptName);
        $appVersionId     = OpenApiUtilClient::getEncodeParam($appVersionId);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'CompileSortScript',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/' . $appVersionId . '/sort-scripts/' . $scriptName . '/actions/compiling',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CompileSortScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $sceneId
     * @param string $groupId
     *
     * @return CreateABTestExperimentResponse
     */
    public function createABTestExperiment($appGroupIdentity, $sceneId, $groupId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createABTestExperimentWithOptions($appGroupIdentity, $sceneId, $groupId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $sceneId
     * @param string         $groupId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateABTestExperimentResponse
     */
    public function createABTestExperimentWithOptions($appGroupIdentity, $sceneId, $groupId, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $sceneId          = OpenApiUtilClient::getEncodeParam($sceneId);
        $groupId          = OpenApiUtilClient::getEncodeParam($groupId);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'CreateABTestExperiment',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/scenes/' . $sceneId . '/groups/' . $groupId . '/experiments',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateABTestExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $sceneId
     *
     * @return CreateABTestGroupResponse
     */
    public function createABTestGroup($appGroupIdentity, $sceneId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createABTestGroupWithOptions($appGroupIdentity, $sceneId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $sceneId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateABTestGroupResponse
     */
    public function createABTestGroupWithOptions($appGroupIdentity, $sceneId, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $sceneId          = OpenApiUtilClient::getEncodeParam($sceneId);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'CreateABTestGroup',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/scenes/' . $sceneId . '/groups',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateABTestGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     *
     * @return CreateABTestSceneResponse
     */
    public function createABTestScene($appGroupIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createABTestSceneWithOptions($appGroupIdentity, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateABTestSceneResponse
     */
    public function createABTestSceneWithOptions($appGroupIdentity, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'CreateABTestScene',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/scenes',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateABTestSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string           $appGroupIdentity
     * @param CreateAppRequest $request
     *
     * @return CreateAppResponse
     */
    public function createApp($appGroupIdentity, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAppWithOptions($appGroupIdentity, $request, $headers, $runtime);
    }

    /**
     * @param string           $appGroupIdentity
     * @param CreateAppRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return CreateAppResponse
     */
    public function createAppWithOptions($appGroupIdentity, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $query            = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['dryRun'] = $request->dryRun;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateApp',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return CreateAppGroupResponse
     */
    public function createAppGroup()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createAppGroupWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateAppGroupResponse
     */
    public function createAppGroupWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'CreateAppGroup',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateAppGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     *
     * @return CreateDataCollectionResponse
     */
    public function createDataCollection($appGroupIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDataCollectionWithOptions($appGroupIdentity, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateDataCollectionResponse
     */
    public function createDataCollectionWithOptions($appGroupIdentity, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'CreateDataCollection',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/data-collections',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateDataCollectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                 $appGroupIdentity
     * @param string                 $appId
     * @param CreateFirstRankRequest $request
     *
     * @return CreateFirstRankResponse
     */
    public function createFirstRank($appGroupIdentity, $appId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFirstRankWithOptions($appGroupIdentity, $appId, $request, $headers, $runtime);
    }

    /**
     * @param string                 $appGroupIdentity
     * @param string                 $appId
     * @param CreateFirstRankRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateFirstRankResponse
     */
    public function createFirstRankWithOptions($appGroupIdentity, $appId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $appId            = OpenApiUtilClient::getEncodeParam($appId);
        $query            = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['dryRun'] = $request->dryRun;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateFirstRank',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/' . $appId . '/first-ranks',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateFirstRankResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                        $appGroupIdentity
     * @param string                        $functionName
     * @param CreateFunctionInstanceRequest $request
     *
     * @return CreateFunctionInstanceResponse
     */
    public function createFunctionInstance($appGroupIdentity, $functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFunctionInstanceWithOptions($appGroupIdentity, $functionName, $request, $headers, $runtime);
    }

    /**
     * @param string                        $appGroupIdentity
     * @param string                        $functionName
     * @param CreateFunctionInstanceRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateFunctionInstanceResponse
     */
    public function createFunctionInstanceWithOptions($appGroupIdentity, $functionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $functionName     = OpenApiUtilClient::getEncodeParam($functionName);
        $body             = [];
        if (!Utils::isUnset($request->createParameters)) {
            $body['createParameters'] = $request->createParameters;
        }
        if (!Utils::isUnset($request->cron)) {
            $body['cron'] = $request->cron;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->functionType)) {
            $body['functionType'] = $request->functionType;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $body['instanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->modelType)) {
            $body['modelType'] = $request->modelType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateFunctionInstance',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/functions/' . $functionName . '/instances',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateFunctionInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $functionName
     * @param string $instanceName
     *
     * @return CreateFunctionTaskResponse
     */
    public function createFunctionTask($appGroupIdentity, $functionName, $instanceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFunctionTaskWithOptions($appGroupIdentity, $functionName, $instanceName, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $functionName
     * @param string         $instanceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateFunctionTaskResponse
     */
    public function createFunctionTaskWithOptions($appGroupIdentity, $functionName, $instanceName, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $functionName     = OpenApiUtilClient::getEncodeParam($functionName);
        $instanceName     = OpenApiUtilClient::getEncodeParam($instanceName);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'CreateFunctionTask',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/functions/' . $functionName . '/instances/' . $instanceName . '/tasks',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateFunctionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return CreateInterventionDictionaryResponse
     */
    public function createInterventionDictionary()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createInterventionDictionaryWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateInterventionDictionaryResponse
     */
    public function createInterventionDictionaryWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'CreateInterventionDictionary',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/intervention-dictionaries',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateInterventionDictionaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     *
     * @return CreateModelResponse
     */
    public function createModel($appGroupIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createModelWithOptions($appGroupIdentity, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateModelResponse
     */
    public function createModelWithOptions($appGroupIdentity, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'CreateModel',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/algorithm/models',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                      $appGroupIdentity
     * @param string                      $appId
     * @param CreateQueryProcessorRequest $request
     *
     * @return CreateQueryProcessorResponse
     */
    public function createQueryProcessor($appGroupIdentity, $appId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createQueryProcessorWithOptions($appGroupIdentity, $appId, $request, $headers, $runtime);
    }

    /**
     * @param string                      $appGroupIdentity
     * @param string                      $appId
     * @param CreateQueryProcessorRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreateQueryProcessorResponse
     */
    public function createQueryProcessorWithOptions($appGroupIdentity, $appId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $appId            = OpenApiUtilClient::getEncodeParam($appId);
        $query            = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['dryRun'] = $request->dryRun;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateQueryProcessor',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/' . $appId . '/query-processors',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateQueryProcessorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     *
     * @return CreateScheduledTaskResponse
     */
    public function createScheduledTask($appGroupIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createScheduledTaskWithOptions($appGroupIdentity, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateScheduledTaskResponse
     */
    public function createScheduledTaskWithOptions($appGroupIdentity, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'CreateScheduledTask',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/scheduled-tasks',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateScheduledTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $appId
     *
     * @return CreateSearchStrategyResponse
     */
    public function createSearchStrategy($appGroupIdentity, $appId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSearchStrategyWithOptions($appGroupIdentity, $appId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $appId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateSearchStrategyResponse
     */
    public function createSearchStrategyWithOptions($appGroupIdentity, $appId, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $appId            = OpenApiUtilClient::getEncodeParam($appId);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'CreateSearchStrategy',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/' . $appId . '/search-strategies',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateSearchStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                  $appGroupIdentity
     * @param string                  $appId
     * @param CreateSecondRankRequest $request
     *
     * @return CreateSecondRankResponse
     */
    public function createSecondRank($appGroupIdentity, $appId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSecondRankWithOptions($appGroupIdentity, $appId, $request, $headers, $runtime);
    }

    /**
     * @param string                  $appGroupIdentity
     * @param string                  $appId
     * @param CreateSecondRankRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateSecondRankResponse
     */
    public function createSecondRankWithOptions($appGroupIdentity, $appId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $appId            = OpenApiUtilClient::getEncodeParam($appId);
        $query            = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['dryRun'] = $request->dryRun;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSecondRank',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/' . $appId . '/second-ranks',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateSecondRankResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $appVersionId
     *
     * @return CreateSortScriptResponse
     */
    public function createSortScript($appGroupIdentity, $appVersionId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSortScriptWithOptions($appGroupIdentity, $appVersionId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $appVersionId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateSortScriptResponse
     */
    public function createSortScriptWithOptions($appGroupIdentity, $appVersionId, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $appVersionId     = OpenApiUtilClient::getEncodeParam($appVersionId);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'CreateSortScript',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/' . $appVersionId . '/sort-scripts',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateSortScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return CreateUserAnalyzerResponse
     */
    public function createUserAnalyzer()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createUserAnalyzerWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return CreateUserAnalyzerResponse
     */
    public function createUserAnalyzerWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'CreateUserAnalyzer',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/user-analyzers',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateUserAnalyzerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $sceneId
     * @param string $groupId
     * @param string $experimentId
     *
     * @return DeleteABTestExperimentResponse
     */
    public function deleteABTestExperiment($appGroupIdentity, $sceneId, $groupId, $experimentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteABTestExperimentWithOptions($appGroupIdentity, $sceneId, $groupId, $experimentId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $sceneId
     * @param string         $groupId
     * @param string         $experimentId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteABTestExperimentResponse
     */
    public function deleteABTestExperimentWithOptions($appGroupIdentity, $sceneId, $groupId, $experimentId, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $sceneId          = OpenApiUtilClient::getEncodeParam($sceneId);
        $groupId          = OpenApiUtilClient::getEncodeParam($groupId);
        $experimentId     = OpenApiUtilClient::getEncodeParam($experimentId);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteABTestExperiment',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/scenes/' . $sceneId . '/groups/' . $groupId . '/experiments/' . $experimentId . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteABTestExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $sceneId
     * @param string $groupId
     *
     * @return DeleteABTestGroupResponse
     */
    public function deleteABTestGroup($appGroupIdentity, $sceneId, $groupId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteABTestGroupWithOptions($appGroupIdentity, $sceneId, $groupId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $sceneId
     * @param string         $groupId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteABTestGroupResponse
     */
    public function deleteABTestGroupWithOptions($appGroupIdentity, $sceneId, $groupId, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $sceneId          = OpenApiUtilClient::getEncodeParam($sceneId);
        $groupId          = OpenApiUtilClient::getEncodeParam($groupId);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteABTestGroup',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/scenes/' . $sceneId . '/groups/' . $groupId . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteABTestGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $sceneId
     *
     * @return DeleteABTestSceneResponse
     */
    public function deleteABTestScene($appGroupIdentity, $sceneId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteABTestSceneWithOptions($appGroupIdentity, $sceneId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $sceneId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteABTestSceneResponse
     */
    public function deleteABTestSceneWithOptions($appGroupIdentity, $sceneId, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $sceneId          = OpenApiUtilClient::getEncodeParam($sceneId);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteABTestScene',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/scenes/' . $sceneId . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteABTestSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $functionName
     * @param string $instanceName
     *
     * @return DeleteFunctionInstanceResponse
     */
    public function deleteFunctionInstance($appGroupIdentity, $functionName, $instanceName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteFunctionInstanceWithOptions($appGroupIdentity, $functionName, $instanceName, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $functionName
     * @param string         $instanceName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteFunctionInstanceResponse
     */
    public function deleteFunctionInstanceWithOptions($appGroupIdentity, $functionName, $instanceName, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $functionName     = OpenApiUtilClient::getEncodeParam($functionName);
        $instanceName     = OpenApiUtilClient::getEncodeParam($instanceName);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteFunctionInstance',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/functions/' . $functionName . '/instances/' . $instanceName . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteFunctionInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $modelName
     *
     * @return DeleteModelResponse
     */
    public function deleteModel($appGroupIdentity, $modelName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteModelWithOptions($appGroupIdentity, $modelName, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $modelName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteModelResponse
     */
    public function deleteModelWithOptions($appGroupIdentity, $modelName, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $modelName        = OpenApiUtilClient::getEncodeParam($modelName);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteModel',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/algorithm/models/' . $modelName . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $scriptName
     * @param string $appVersionId
     *
     * @return DeleteSortScriptResponse
     */
    public function deleteSortScript($appGroupIdentity, $scriptName, $appVersionId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSortScriptWithOptions($appGroupIdentity, $scriptName, $appVersionId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $scriptName
     * @param string         $appVersionId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteSortScriptResponse
     */
    public function deleteSortScriptWithOptions($appGroupIdentity, $scriptName, $appVersionId, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $scriptName       = OpenApiUtilClient::getEncodeParam($scriptName);
        $appVersionId     = OpenApiUtilClient::getEncodeParam($appVersionId);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteSortScript',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/' . $appVersionId . '/sort-scripts/' . $scriptName . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteSortScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $appVersionId
     * @param string $scriptName
     * @param string $fileName
     *
     * @return DeleteSortScriptFileResponse
     */
    public function deleteSortScriptFile($appGroupIdentity, $appVersionId, $scriptName, $fileName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSortScriptFileWithOptions($appGroupIdentity, $appVersionId, $scriptName, $fileName, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $appVersionId
     * @param string         $scriptName
     * @param string         $fileName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteSortScriptFileResponse
     */
    public function deleteSortScriptFileWithOptions($appGroupIdentity, $appVersionId, $scriptName, $fileName, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $appVersionId     = OpenApiUtilClient::getEncodeParam($appVersionId);
        $scriptName       = OpenApiUtilClient::getEncodeParam($scriptName);
        $fileName         = OpenApiUtilClient::getEncodeParam($fileName);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteSortScriptFile',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/' . $appVersionId . '/sort-scripts/' . $scriptName . '/files/src/' . $fileName . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteSortScriptFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $sceneId
     * @param string $groupId
     * @param string $experimentId
     *
     * @return DescribeABTestExperimentResponse
     */
    public function describeABTestExperiment($appGroupIdentity, $sceneId, $groupId, $experimentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeABTestExperimentWithOptions($appGroupIdentity, $sceneId, $groupId, $experimentId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $sceneId
     * @param string         $groupId
     * @param string         $experimentId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeABTestExperimentResponse
     */
    public function describeABTestExperimentWithOptions($appGroupIdentity, $sceneId, $groupId, $experimentId, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $sceneId          = OpenApiUtilClient::getEncodeParam($sceneId);
        $groupId          = OpenApiUtilClient::getEncodeParam($groupId);
        $experimentId     = OpenApiUtilClient::getEncodeParam($experimentId);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeABTestExperiment',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/scenes/' . $sceneId . '/groups/' . $groupId . '/experiments/' . $experimentId . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeABTestExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $sceneId
     * @param string $groupId
     *
     * @return DescribeABTestGroupResponse
     */
    public function describeABTestGroup($appGroupIdentity, $sceneId, $groupId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeABTestGroupWithOptions($appGroupIdentity, $sceneId, $groupId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $sceneId
     * @param string         $groupId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeABTestGroupResponse
     */
    public function describeABTestGroupWithOptions($appGroupIdentity, $sceneId, $groupId, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $sceneId          = OpenApiUtilClient::getEncodeParam($sceneId);
        $groupId          = OpenApiUtilClient::getEncodeParam($groupId);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeABTestGroup',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/scenes/' . $sceneId . '/groups/' . $groupId . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeABTestGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $sceneId
     *
     * @return DescribeABTestSceneResponse
     */
    public function describeABTestScene($appGroupIdentity, $sceneId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeABTestSceneWithOptions($appGroupIdentity, $sceneId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $sceneId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeABTestSceneResponse
     */
    public function describeABTestSceneWithOptions($appGroupIdentity, $sceneId, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $sceneId          = OpenApiUtilClient::getEncodeParam($sceneId);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeABTestScene',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/scenes/' . $sceneId . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeABTestSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $appId
     *
     * @return DescribeAppResponse
     */
    public function describeApp($appGroupIdentity, $appId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeAppWithOptions($appGroupIdentity, $appId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $appId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeAppResponse
     */
    public function describeAppWithOptions($appGroupIdentity, $appId, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $appId            = OpenApiUtilClient::getEncodeParam($appId);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeApp',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/' . $appId . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     *
     * @return DescribeAppGroupResponse
     */
    public function describeAppGroup($appGroupIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeAppGroupWithOptions($appGroupIdentity, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeAppGroupResponse
     */
    public function describeAppGroupWithOptions($appGroupIdentity, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeAppGroup',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeAppGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                            $appGroupIdentity
     * @param DescribeAppGroupDataReportRequest $request
     *
     * @return DescribeAppGroupDataReportResponse
     */
    public function describeAppGroupDataReport($appGroupIdentity, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeAppGroupDataReportWithOptions($appGroupIdentity, $request, $headers, $runtime);
    }

    /**
     * @param string                            $appGroupIdentity
     * @param DescribeAppGroupDataReportRequest $request
     * @param string[]                          $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeAppGroupDataReportResponse
     */
    public function describeAppGroupDataReportWithOptions($appGroupIdentity, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $query            = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['startTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAppGroupDataReport',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/data-report',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeAppGroupDataReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     *
     * @return DescribeAppGroupStatisticsResponse
     */
    public function describeAppGroupStatistics($appGroupIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeAppGroupStatisticsWithOptions($appGroupIdentity, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeAppGroupStatisticsResponse
     */
    public function describeAppGroupStatisticsWithOptions($appGroupIdentity, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeAppGroupStatistics',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/statistics',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeAppGroupStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $appId
     *
     * @return DescribeAppStatisticsResponse
     */
    public function describeAppStatistics($appGroupIdentity, $appId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeAppStatisticsWithOptions($appGroupIdentity, $appId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $appId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeAppStatisticsResponse
     */
    public function describeAppStatisticsWithOptions($appGroupIdentity, $appId, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $appId            = OpenApiUtilClient::getEncodeParam($appId);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeAppStatistics',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/' . $appId . '/statistics',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeAppStatisticsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     *
     * @return DescribeAppsResponse
     */
    public function describeApps($appGroupIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeAppsWithOptions($appGroupIdentity, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeAppsResponse
     */
    public function describeAppsWithOptions($appGroupIdentity, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeApps',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeAppsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $dataCollectionIdentity
     *
     * @return DescribeDataCollctionResponse
     */
    public function describeDataCollction($appGroupIdentity, $dataCollectionIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeDataCollctionWithOptions($appGroupIdentity, $dataCollectionIdentity, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $dataCollectionIdentity
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeDataCollctionResponse
     */
    public function describeDataCollctionWithOptions($appGroupIdentity, $dataCollectionIdentity, $headers, $runtime)
    {
        $appGroupIdentity       = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $dataCollectionIdentity = OpenApiUtilClient::getEncodeParam($dataCollectionIdentity);
        $req                    = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeDataCollction',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/data-collections/' . $dataCollectionIdentity . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeDataCollctionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $appId
     * @param string $name
     *
     * @return DescribeFirstRankResponse
     */
    public function describeFirstRank($appGroupIdentity, $appId, $name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeFirstRankWithOptions($appGroupIdentity, $appId, $name, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $appId
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeFirstRankResponse
     */
    public function describeFirstRankWithOptions($appGroupIdentity, $appId, $name, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $appId            = OpenApiUtilClient::getEncodeParam($appId);
        $name             = OpenApiUtilClient::getEncodeParam($name);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeFirstRank',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/' . $appId . '/first-ranks/' . $name . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeFirstRankResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $name
     *
     * @return DescribeInterventionDictionaryResponse
     */
    public function describeInterventionDictionary($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeInterventionDictionaryWithOptions($name, $headers, $runtime);
    }

    /**
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeInterventionDictionaryResponse
     */
    public function describeInterventionDictionaryWithOptions($name, $headers, $runtime)
    {
        $name = OpenApiUtilClient::getEncodeParam($name);
        $req  = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeInterventionDictionary',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/intervention-dictionaries/' . $name . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeInterventionDictionaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $modelName
     *
     * @return DescribeModelResponse
     */
    public function describeModel($appGroupIdentity, $modelName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeModelWithOptions($appGroupIdentity, $modelName, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $modelName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeModelResponse
     */
    public function describeModelWithOptions($appGroupIdentity, $modelName, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $modelName        = OpenApiUtilClient::getEncodeParam($modelName);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeModel',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/algorithm/models/' . $modelName . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $appId
     * @param string $name
     *
     * @return DescribeQueryProcessorResponse
     */
    public function describeQueryProcessor($appGroupIdentity, $appId, $name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeQueryProcessorWithOptions($appGroupIdentity, $appId, $name, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $appId
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeQueryProcessorResponse
     */
    public function describeQueryProcessorWithOptions($appGroupIdentity, $appId, $name, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $appId            = OpenApiUtilClient::getEncodeParam($appId);
        $name             = OpenApiUtilClient::getEncodeParam($name);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeQueryProcessor',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/' . $appId . '/query-processors/' . $name . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeQueryProcessorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeRegionResponse
     */
    public function describeRegion()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeRegionWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeRegionResponse
     */
    public function describeRegionWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeRegion',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/region',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeRegionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeRegionsResponse
     */
    public function describeRegions()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeRegionsWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/regions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $taskId
     *
     * @return DescribeScheduledTaskResponse
     */
    public function describeScheduledTask($appGroupIdentity, $taskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeScheduledTaskWithOptions($appGroupIdentity, $taskId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $taskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeScheduledTaskResponse
     */
    public function describeScheduledTaskWithOptions($appGroupIdentity, $taskId, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $taskId           = OpenApiUtilClient::getEncodeParam($taskId);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeScheduledTask',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/scheduled-tasks/' . $taskId . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeScheduledTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $appId
     * @param string $name
     *
     * @return DescribeSecondRankResponse
     */
    public function describeSecondRank($appGroupIdentity, $appId, $name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeSecondRankWithOptions($appGroupIdentity, $appId, $name, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $appId
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeSecondRankResponse
     */
    public function describeSecondRankWithOptions($appGroupIdentity, $appId, $name, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $appId            = OpenApiUtilClient::getEncodeParam($appId);
        $name             = OpenApiUtilClient::getEncodeParam($name);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeSecondRank',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/' . $appId . '/second-ranks/' . $name . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeSecondRankResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     *
     * @return DescribeSlowQueryStatusResponse
     */
    public function describeSlowQueryStatus($appGroupIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeSlowQueryStatusWithOptions($appGroupIdentity, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeSlowQueryStatusResponse
     */
    public function describeSlowQueryStatusWithOptions($appGroupIdentity, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeSlowQueryStatus',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/optimizers/slow-query',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeSlowQueryStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                      $name
     * @param DescribeUserAnalyzerRequest $request
     *
     * @return DescribeUserAnalyzerResponse
     */
    public function describeUserAnalyzer($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeUserAnalyzerWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * @param string                      $name
     * @param DescribeUserAnalyzerRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeUserAnalyzerResponse
     */
    public function describeUserAnalyzerWithOptions($name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $name  = OpenApiUtilClient::getEncodeParam($name);
        $query = [];
        if (!Utils::isUnset($request->with)) {
            $query['with'] = $request->with;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUserAnalyzer',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/user-analyzers/' . $name . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeUserAnalyzerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     *
     * @return DisableSlowQueryResponse
     */
    public function disableSlowQuery($appGroupIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->disableSlowQueryWithOptions($appGroupIdentity, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DisableSlowQueryResponse
     */
    public function disableSlowQueryWithOptions($appGroupIdentity, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DisableSlowQuery',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/optimizers/slow-query/actions/disable',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DisableSlowQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     *
     * @return EnableSlowQueryResponse
     */
    public function enableSlowQuery($appGroupIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->enableSlowQueryWithOptions($appGroupIdentity, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return EnableSlowQueryResponse
     */
    public function enableSlowQueryWithOptions($appGroupIdentity, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'EnableSlowQuery',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/optimizers/slow-query/actions/enable',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return EnableSlowQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GenerateMergedTableRequest $request
     *
     * @return GenerateMergedTableResponse
     */
    public function generateMergedTable($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->generateMergedTableWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GenerateMergedTableRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GenerateMergedTableResponse
     */
    public function generateMergedTableWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->spec)) {
            $query['spec'] = $request->spec;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GenerateMergedTable',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/assist/schema/actions/merge',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GenerateMergedTableResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string           $domainName
     * @param GetDomainRequest $request
     *
     * @return GetDomainResponse
     */
    public function getDomain($domainName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDomainWithOptions($domainName, $request, $headers, $runtime);
    }

    /**
     * @param string           $domainName
     * @param GetDomainRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return GetDomainResponse
     */
    public function getDomainWithOptions($domainName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $domainName = OpenApiUtilClient::getEncodeParam($domainName);
        $query      = [];
        if (!Utils::isUnset($request->appGroupIdentity)) {
            $query['appGroupIdentity'] = $request->appGroupIdentity;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDomain',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/domains/' . $domainName . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                           $functionName
     * @param GetFunctionCurrentVersionRequest $request
     *
     * @return GetFunctionCurrentVersionResponse
     */
    public function getFunctionCurrentVersion($functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFunctionCurrentVersionWithOptions($functionName, $request, $headers, $runtime);
    }

    /**
     * @param string                           $functionName
     * @param GetFunctionCurrentVersionRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return GetFunctionCurrentVersionResponse
     */
    public function getFunctionCurrentVersionWithOptions($functionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $functionName = OpenApiUtilClient::getEncodeParam($functionName);
        $query        = [];
        if (!Utils::isUnset($request->category)) {
            $query['category'] = $request->category;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->functionType)) {
            $query['functionType'] = $request->functionType;
        }
        if (!Utils::isUnset($request->modelType)) {
            $query['modelType'] = $request->modelType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetFunctionCurrentVersion',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/functions/' . $functionName . '/current-version',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetFunctionCurrentVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $functionName
     *
     * @return GetFunctionDefaultInstanceResponse
     */
    public function getFunctionDefaultInstance($appGroupIdentity, $functionName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFunctionDefaultInstanceWithOptions($appGroupIdentity, $functionName, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $functionName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetFunctionDefaultInstanceResponse
     */
    public function getFunctionDefaultInstanceWithOptions($appGroupIdentity, $functionName, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $functionName     = OpenApiUtilClient::getEncodeParam($functionName);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetFunctionDefaultInstance',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/functions/' . $functionName . '/default-instance',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetFunctionDefaultInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                     $appGroupIdentity
     * @param string                     $functionName
     * @param string                     $instanceName
     * @param GetFunctionInstanceRequest $request
     *
     * @return GetFunctionInstanceResponse
     */
    public function getFunctionInstance($appGroupIdentity, $functionName, $instanceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFunctionInstanceWithOptions($appGroupIdentity, $functionName, $instanceName, $request, $headers, $runtime);
    }

    /**
     * @param string                     $appGroupIdentity
     * @param string                     $functionName
     * @param string                     $instanceName
     * @param GetFunctionInstanceRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetFunctionInstanceResponse
     */
    public function getFunctionInstanceWithOptions($appGroupIdentity, $functionName, $instanceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $functionName     = OpenApiUtilClient::getEncodeParam($functionName);
        $instanceName     = OpenApiUtilClient::getEncodeParam($instanceName);
        $query            = [];
        if (!Utils::isUnset($request->output)) {
            $query['output'] = $request->output;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetFunctionInstance',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/functions/' . $functionName . '/instances/' . $instanceName . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetFunctionInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $functionName
     * @param string $versionId
     *
     * @return GetFunctionVersionResponse
     */
    public function getFunctionVersion($functionName, $versionId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getFunctionVersionWithOptions($functionName, $versionId, $headers, $runtime);
    }

    /**
     * @param string         $functionName
     * @param string         $versionId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetFunctionVersionResponse
     */
    public function getFunctionVersionWithOptions($functionName, $versionId, $headers, $runtime)
    {
        $functionName = OpenApiUtilClient::getEncodeParam($functionName);
        $versionId    = OpenApiUtilClient::getEncodeParam($versionId);
        $req          = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetFunctionVersion',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/functions/' . $functionName . '/versions/' . $versionId . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetFunctionVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $modelName
     *
     * @return GetModelProgressResponse
     */
    public function getModelProgress($appGroupIdentity, $modelName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getModelProgressWithOptions($appGroupIdentity, $modelName, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $modelName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetModelProgressResponse
     */
    public function getModelProgressWithOptions($appGroupIdentity, $modelName, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $modelName        = OpenApiUtilClient::getEncodeParam($modelName);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetModelProgress',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/algorithm/models/' . $modelName . '/progress',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetModelProgressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $modelName
     *
     * @return GetModelReportResponse
     */
    public function getModelReport($appGroupIdentity, $modelName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getModelReportWithOptions($appGroupIdentity, $modelName, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $modelName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetModelReportResponse
     */
    public function getModelReportWithOptions($appGroupIdentity, $modelName, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $modelName        = OpenApiUtilClient::getEncodeParam($modelName);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetModelReport',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/algorithm/models/' . $modelName . '/report',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetModelReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $appVersionId
     * @param string $scriptName
     *
     * @return GetScriptFileNamesResponse
     */
    public function getScriptFileNames($appGroupIdentity, $appVersionId, $scriptName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getScriptFileNamesWithOptions($appGroupIdentity, $appVersionId, $scriptName, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $appVersionId
     * @param string         $scriptName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetScriptFileNamesResponse
     */
    public function getScriptFileNamesWithOptions($appGroupIdentity, $appVersionId, $scriptName, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $appVersionId     = OpenApiUtilClient::getEncodeParam($appVersionId);
        $scriptName       = OpenApiUtilClient::getEncodeParam($scriptName);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetScriptFileNames',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/' . $appVersionId . '/sort-scripts/' . $scriptName . '/file-names',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetScriptFileNamesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $appId
     * @param string $strategyName
     *
     * @return GetSearchStrategyResponse
     */
    public function getSearchStrategy($appGroupIdentity, $appId, $strategyName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSearchStrategyWithOptions($appGroupIdentity, $appId, $strategyName, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $appId
     * @param string         $strategyName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetSearchStrategyResponse
     */
    public function getSearchStrategyWithOptions($appGroupIdentity, $appId, $strategyName, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $appId            = OpenApiUtilClient::getEncodeParam($appId);
        $strategyName     = OpenApiUtilClient::getEncodeParam($strategyName);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetSearchStrategy',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/' . $appId . '/search-strategies/' . $strategyName . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetSearchStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $scriptName
     * @param string $appVersionId
     *
     * @return GetSortScriptResponse
     */
    public function getSortScript($appGroupIdentity, $scriptName, $appVersionId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSortScriptWithOptions($appGroupIdentity, $scriptName, $appVersionId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $scriptName
     * @param string         $appVersionId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetSortScriptResponse
     */
    public function getSortScriptWithOptions($appGroupIdentity, $scriptName, $appVersionId, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $scriptName       = OpenApiUtilClient::getEncodeParam($scriptName);
        $appVersionId     = OpenApiUtilClient::getEncodeParam($appVersionId);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetSortScript',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/' . $appVersionId . '/sort-scripts/' . $scriptName . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetSortScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $scriptName
     * @param string $appVersionId
     * @param string $fileName
     *
     * @return GetSortScriptFileResponse
     */
    public function getSortScriptFile($appGroupIdentity, $scriptName, $appVersionId, $fileName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSortScriptFileWithOptions($appGroupIdentity, $scriptName, $appVersionId, $fileName, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $scriptName
     * @param string         $appVersionId
     * @param string         $fileName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetSortScriptFileResponse
     */
    public function getSortScriptFileWithOptions($appGroupIdentity, $scriptName, $appVersionId, $fileName, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $scriptName       = OpenApiUtilClient::getEncodeParam($scriptName);
        $appVersionId     = OpenApiUtilClient::getEncodeParam($appVersionId);
        $fileName         = OpenApiUtilClient::getEncodeParam($fileName);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetSortScriptFile',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/' . $appVersionId . '/sort-scripts/' . $scriptName . '/files/src/' . $fileName . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetSortScriptFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                    $appGroupIdentity
     * @param GetValidationErrorRequest $request
     *
     * @return GetValidationErrorResponse
     */
    public function getValidationError($appGroupIdentity, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getValidationErrorWithOptions($appGroupIdentity, $request, $headers, $runtime);
    }

    /**
     * @param string                    $appGroupIdentity
     * @param GetValidationErrorRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetValidationErrorResponse
     */
    public function getValidationErrorWithOptions($appGroupIdentity, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $query            = [];
        if (!Utils::isUnset($request->errorCode)) {
            $query['errorCode'] = $request->errorCode;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetValidationError',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/algorithm/data/validation-error',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetValidationErrorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                     $appGroupIdentity
     * @param GetValidationReportRequest $request
     *
     * @return GetValidationReportResponse
     */
    public function getValidationReport($appGroupIdentity, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getValidationReportWithOptions($appGroupIdentity, $request, $headers, $runtime);
    }

    /**
     * @param string                     $appGroupIdentity
     * @param GetValidationReportRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return GetValidationReportResponse
     */
    public function getValidationReportWithOptions($appGroupIdentity, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $query            = [];
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetValidationReport',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/algorithm/data/validation-report',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetValidationReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $sceneId
     * @param string $groupId
     *
     * @return ListABTestExperimentsResponse
     */
    public function listABTestExperiments($appGroupIdentity, $sceneId, $groupId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listABTestExperimentsWithOptions($appGroupIdentity, $sceneId, $groupId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $sceneId
     * @param string         $groupId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListABTestExperimentsResponse
     */
    public function listABTestExperimentsWithOptions($appGroupIdentity, $sceneId, $groupId, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $sceneId          = OpenApiUtilClient::getEncodeParam($sceneId);
        $groupId          = OpenApiUtilClient::getEncodeParam($groupId);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListABTestExperiments',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/scenes/' . $sceneId . '/groups/' . $groupId . '/experiments',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListABTestExperimentsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $sceneId
     * @param string $groupId
     * @param string $experimentId
     *
     * @return ListABTestFixedFlowDividersResponse
     */
    public function listABTestFixedFlowDividers($appGroupIdentity, $sceneId, $groupId, $experimentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listABTestFixedFlowDividersWithOptions($appGroupIdentity, $sceneId, $groupId, $experimentId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $sceneId
     * @param string         $groupId
     * @param string         $experimentId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListABTestFixedFlowDividersResponse
     */
    public function listABTestFixedFlowDividersWithOptions($appGroupIdentity, $sceneId, $groupId, $experimentId, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $sceneId          = OpenApiUtilClient::getEncodeParam($sceneId);
        $groupId          = OpenApiUtilClient::getEncodeParam($groupId);
        $experimentId     = OpenApiUtilClient::getEncodeParam($experimentId);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListABTestFixedFlowDividers',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/scenes/' . $sceneId . '/groups/' . $groupId . '/experiments/' . $experimentId . '/fixed-flow-dividers',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListABTestFixedFlowDividersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $sceneId
     *
     * @return ListABTestGroupsResponse
     */
    public function listABTestGroups($appGroupIdentity, $sceneId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listABTestGroupsWithOptions($appGroupIdentity, $sceneId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $sceneId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListABTestGroupsResponse
     */
    public function listABTestGroupsWithOptions($appGroupIdentity, $sceneId, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $sceneId          = OpenApiUtilClient::getEncodeParam($sceneId);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListABTestGroups',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/scenes/' . $sceneId . '/groups',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListABTestGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $sceneId
     * @param string $groupId
     *
     * @return ListABTestMetricsResponse
     */
    public function listABTestMetrics($appGroupIdentity, $sceneId, $groupId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listABTestMetricsWithOptions($appGroupIdentity, $sceneId, $groupId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $sceneId
     * @param string         $groupId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListABTestMetricsResponse
     */
    public function listABTestMetricsWithOptions($appGroupIdentity, $sceneId, $groupId, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $sceneId          = OpenApiUtilClient::getEncodeParam($sceneId);
        $groupId          = OpenApiUtilClient::getEncodeParam($groupId);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListABTestMetrics',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/scenes/' . $sceneId . '/groups/' . $groupId . '/metrics',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListABTestMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     *
     * @return ListABTestScenesResponse
     */
    public function listABTestScenes($appGroupIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listABTestScenesWithOptions($appGroupIdentity, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListABTestScenesResponse
     */
    public function listABTestScenesWithOptions($appGroupIdentity, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListABTestScenes',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/scenes',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListABTestScenesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                    $appGroupIdentity
     * @param ListAppGroupErrorsRequest $request
     *
     * @return ListAppGroupErrorsResponse
     */
    public function listAppGroupErrors($appGroupIdentity, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAppGroupErrorsWithOptions($appGroupIdentity, $request, $headers, $runtime);
    }

    /**
     * @param string                    $appGroupIdentity
     * @param ListAppGroupErrorsRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListAppGroupErrorsResponse
     */
    public function listAppGroupErrorsWithOptions($appGroupIdentity, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $query            = [];
        if (!Utils::isUnset($request->appId)) {
            $query['appId'] = $request->appId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['startTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->stopTime)) {
            $query['stopTime'] = $request->stopTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAppGroupErrors',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/errors',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAppGroupErrorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                     $appGroupIdentity
     * @param ListAppGroupMetricsRequest $request
     *
     * @return ListAppGroupMetricsResponse
     */
    public function listAppGroupMetrics($appGroupIdentity, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAppGroupMetricsWithOptions($appGroupIdentity, $request, $headers, $runtime);
    }

    /**
     * @param string                     $appGroupIdentity
     * @param ListAppGroupMetricsRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListAppGroupMetricsResponse
     */
    public function listAppGroupMetricsWithOptions($appGroupIdentity, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $query            = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->indexes)) {
            $query['indexes'] = $request->indexes;
        }
        if (!Utils::isUnset($request->metricType)) {
            $query['metricType'] = $request->metricType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['startTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAppGroupMetrics',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/metrics',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAppGroupMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAppGroupsRequest $request
     *
     * @return ListAppGroupsResponse
     */
    public function listAppGroups($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAppGroupsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListAppGroupsRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListAppGroupsResponse
     */
    public function listAppGroupsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['instanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['resourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['sortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAppGroups',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListAppGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAppsRequest $request
     *
     * @return ListAppsResponse
     */
    public function listApps($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listAppsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListAppsRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return ListAppsResponse
     */
    public function listAppsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->group)) {
            $query['group'] = $request->group;
        }
        if (!Utils::isUnset($request->page)) {
            $query['page'] = $request->page;
        }
        if (!Utils::isUnset($request->size)) {
            $query['size'] = $request->size;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListApps',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/apps',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'none',
        ]);

        return ListAppsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                     $appGroupIdentity
     * @param ListDataCollectionsRequest $request
     *
     * @return ListDataCollectionsResponse
     */
    public function listDataCollections($appGroupIdentity, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDataCollectionsWithOptions($appGroupIdentity, $request, $headers, $runtime);
    }

    /**
     * @param string                     $appGroupIdentity
     * @param ListDataCollectionsRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListDataCollectionsResponse
     */
    public function listDataCollectionsWithOptions($appGroupIdentity, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $query            = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDataCollections',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/data-collections',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDataCollectionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                           $dataSourceType
     * @param ListDataSourceTableFieldsRequest $request
     *
     * @return ListDataSourceTableFieldsResponse
     */
    public function listDataSourceTableFields($dataSourceType, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDataSourceTableFieldsWithOptions($dataSourceType, $request, $headers, $runtime);
    }

    /**
     * @param string                           $dataSourceType
     * @param ListDataSourceTableFieldsRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ListDataSourceTableFieldsResponse
     */
    public function listDataSourceTableFieldsWithOptions($dataSourceType, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $dataSourceType = OpenApiUtilClient::getEncodeParam($dataSourceType);
        $query          = [];
        if (!Utils::isUnset($request->params)) {
            $query['params'] = $request->params;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDataSourceTableFields',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/assist/data-sources/' . $dataSourceType . '/fields',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDataSourceTableFieldsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                      $dataSourceType
     * @param ListDataSourceTablesRequest $request
     *
     * @return ListDataSourceTablesResponse
     */
    public function listDataSourceTables($dataSourceType, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDataSourceTablesWithOptions($dataSourceType, $request, $headers, $runtime);
    }

    /**
     * @param string                      $dataSourceType
     * @param ListDataSourceTablesRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListDataSourceTablesResponse
     */
    public function listDataSourceTablesWithOptions($dataSourceType, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $dataSourceType = OpenApiUtilClient::getEncodeParam($dataSourceType);
        $query          = [];
        if (!Utils::isUnset($request->params)) {
            $query['params'] = $request->params;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDataSourceTables',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/assist/data-sources/' . $dataSourceType . '/tables',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDataSourceTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                             $appGroupIdentity
     * @param ListDeployedAlgorithmModelsRequest $request
     *
     * @return ListDeployedAlgorithmModelsResponse
     */
    public function listDeployedAlgorithmModels($appGroupIdentity, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDeployedAlgorithmModelsWithOptions($appGroupIdentity, $request, $headers, $runtime);
    }

    /**
     * @param string                             $appGroupIdentity
     * @param ListDeployedAlgorithmModelsRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return ListDeployedAlgorithmModelsResponse
     */
    public function listDeployedAlgorithmModelsWithOptions($appGroupIdentity, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $query            = [];
        if (!Utils::isUnset($request->algorithmType)) {
            $query['algorithmType'] = $request->algorithmType;
        }
        if (!Utils::isUnset($request->inServiceOnly)) {
            $query['inServiceOnly'] = $request->inServiceOnly;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDeployedAlgorithmModels',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/deployed-algorithm-models',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDeployedAlgorithmModelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $appId
     *
     * @return ListFirstRanksResponse
     */
    public function listFirstRanks($appGroupIdentity, $appId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFirstRanksWithOptions($appGroupIdentity, $appId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $appId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListFirstRanksResponse
     */
    public function listFirstRanksWithOptions($appGroupIdentity, $appId, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $appId            = OpenApiUtilClient::getEncodeParam($appId);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListFirstRanks',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/' . $appId . '/first-ranks',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFirstRanksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                       $appGroupIdentity
     * @param string                       $functionName
     * @param ListFunctionInstancesRequest $request
     *
     * @return ListFunctionInstancesResponse
     */
    public function listFunctionInstances($appGroupIdentity, $functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFunctionInstancesWithOptions($appGroupIdentity, $functionName, $request, $headers, $runtime);
    }

    /**
     * @param string                       $appGroupIdentity
     * @param string                       $functionName
     * @param ListFunctionInstancesRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return ListFunctionInstancesResponse
     */
    public function listFunctionInstancesWithOptions($appGroupIdentity, $functionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $functionName     = OpenApiUtilClient::getEncodeParam($functionName);
        $query            = [];
        if (!Utils::isUnset($request->functionType)) {
            $query['functionType'] = $request->functionType;
        }
        if (!Utils::isUnset($request->modelType)) {
            $query['modelType'] = $request->modelType;
        }
        if (!Utils::isUnset($request->output)) {
            $query['output'] = $request->output;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->source)) {
            $query['source'] = $request->source;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFunctionInstances',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/functions/' . $functionName . '/instances',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFunctionInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                   $appGroupIdentity
     * @param string                   $functionName
     * @param string                   $instanceName
     * @param ListFunctionTasksRequest $request
     *
     * @return ListFunctionTasksResponse
     */
    public function listFunctionTasks($appGroupIdentity, $functionName, $instanceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listFunctionTasksWithOptions($appGroupIdentity, $functionName, $instanceName, $request, $headers, $runtime);
    }

    /**
     * @param string                   $appGroupIdentity
     * @param string                   $functionName
     * @param string                   $instanceName
     * @param ListFunctionTasksRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListFunctionTasksResponse
     */
    public function listFunctionTasksWithOptions($appGroupIdentity, $functionName, $instanceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $functionName     = OpenApiUtilClient::getEncodeParam($functionName);
        $instanceName     = OpenApiUtilClient::getEncodeParam($instanceName);
        $query            = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['startTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->status)) {
            $query['status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFunctionTasks',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/functions/' . $functionName . '/instances/' . $instanceName . '/tasks',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListFunctionTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListInterventionDictionariesRequest $request
     *
     * @return ListInterventionDictionariesResponse
     */
    public function listInterventionDictionaries($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInterventionDictionariesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListInterventionDictionariesRequest $request
     * @param string[]                            $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return ListInterventionDictionariesResponse
     */
    public function listInterventionDictionariesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->types)) {
            $query['types'] = $request->types;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInterventionDictionaries',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/intervention-dictionaries',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListInterventionDictionariesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                                   $name
     * @param ListInterventionDictionaryEntriesRequest $request
     *
     * @return ListInterventionDictionaryEntriesResponse
     */
    public function listInterventionDictionaryEntries($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInterventionDictionaryEntriesWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * @param string                                   $name
     * @param ListInterventionDictionaryEntriesRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return ListInterventionDictionaryEntriesResponse
     */
    public function listInterventionDictionaryEntriesWithOptions($name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $name  = OpenApiUtilClient::getEncodeParam($name);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->word)) {
            $query['word'] = $request->word;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInterventionDictionaryEntries',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/intervention-dictionaries/' . $name . '/entries',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListInterventionDictionaryEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                                      $name
     * @param ListInterventionDictionaryNerResultsRequest $request
     *
     * @return ListInterventionDictionaryNerResultsResponse
     */
    public function listInterventionDictionaryNerResults($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInterventionDictionaryNerResultsWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * @param string                                      $name
     * @param ListInterventionDictionaryNerResultsRequest $request
     * @param string[]                                    $headers
     * @param RuntimeOptions                              $runtime
     *
     * @return ListInterventionDictionaryNerResultsResponse
     */
    public function listInterventionDictionaryNerResultsWithOptions($name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $name  = OpenApiUtilClient::getEncodeParam($name);
        $query = [];
        if (!Utils::isUnset($request->query)) {
            $query['query'] = $request->query;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInterventionDictionaryNerResults',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/intervention-dictionaries/' . $name . '/ner-results',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListInterventionDictionaryNerResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $name
     *
     * @return ListInterventionDictionaryRelatedEntitiesResponse
     */
    public function listInterventionDictionaryRelatedEntities($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listInterventionDictionaryRelatedEntitiesWithOptions($name, $headers, $runtime);
    }

    /**
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListInterventionDictionaryRelatedEntitiesResponse
     */
    public function listInterventionDictionaryRelatedEntitiesWithOptions($name, $headers, $runtime)
    {
        $name = OpenApiUtilClient::getEncodeParam($name);
        $req  = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListInterventionDictionaryRelatedEntities',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/intervention-dictionaries/' . $name . '/related',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListInterventionDictionaryRelatedEntitiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string            $appGroupIdentity
     * @param ListModelsRequest $request
     *
     * @return ListModelsResponse
     */
    public function listModels($appGroupIdentity, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listModelsWithOptions($appGroupIdentity, $request, $headers, $runtime);
    }

    /**
     * @param string            $appGroupIdentity
     * @param ListModelsRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListModelsResponse
     */
    public function listModelsWithOptions($appGroupIdentity, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $query            = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListModels',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/algorithm/models',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListModelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     *
     * @return ListProceedingsResponse
     */
    public function listProceedings($appGroupIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listProceedingsWithOptions($appGroupIdentity, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListProceedingsResponse
     */
    public function listProceedingsWithOptions($appGroupIdentity, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListProceedings',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/proceedings',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListProceedingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                                   $appGroupIdentity
     * @param string                                   $appId
     * @param string                                   $name
     * @param ListQueryProcessorAnalyzerResultsRequest $request
     *
     * @return ListQueryProcessorAnalyzerResultsResponse
     */
    public function listQueryProcessorAnalyzerResults($appGroupIdentity, $appId, $name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listQueryProcessorAnalyzerResultsWithOptions($appGroupIdentity, $appId, $name, $request, $headers, $runtime);
    }

    /**
     * @param string                                   $appGroupIdentity
     * @param string                                   $appId
     * @param string                                   $name
     * @param ListQueryProcessorAnalyzerResultsRequest $request
     * @param string[]                                 $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return ListQueryProcessorAnalyzerResultsResponse
     */
    public function listQueryProcessorAnalyzerResultsWithOptions($appGroupIdentity, $appId, $name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $appId            = OpenApiUtilClient::getEncodeParam($appId);
        $name             = OpenApiUtilClient::getEncodeParam($name);
        $query            = [];
        if (!Utils::isUnset($request->text)) {
            $query['text'] = $request->text;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListQueryProcessorAnalyzerResults',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/' . $appId . '/query-processors/' . $name . '/analyze',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListQueryProcessorAnalyzerResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListQueryProcessorNersRequest $request
     *
     * @return ListQueryProcessorNersResponse
     */
    public function listQueryProcessorNers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listQueryProcessorNersWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListQueryProcessorNersRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return ListQueryProcessorNersResponse
     */
    public function listQueryProcessorNersWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['domain'] = $request->domain;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListQueryProcessorNers',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/query-processor/ner/default-priorities',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListQueryProcessorNersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                     $appGroupIdentity
     * @param string                     $appId
     * @param ListQueryProcessorsRequest $request
     *
     * @return ListQueryProcessorsResponse
     */
    public function listQueryProcessors($appGroupIdentity, $appId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listQueryProcessorsWithOptions($appGroupIdentity, $appId, $request, $headers, $runtime);
    }

    /**
     * @param string                     $appGroupIdentity
     * @param string                     $appId
     * @param ListQueryProcessorsRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListQueryProcessorsResponse
     */
    public function listQueryProcessorsWithOptions($appGroupIdentity, $appId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $appId            = OpenApiUtilClient::getEncodeParam($appId);
        $query            = [];
        if (!Utils::isUnset($request->isActive)) {
            $query['isActive'] = $request->isActive;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListQueryProcessors',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/' . $appId . '/query-processors',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListQueryProcessorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                      $appGroupIdentity
     * @param ListQuotaReviewTasksRequest $request
     *
     * @return ListQuotaReviewTasksResponse
     */
    public function listQuotaReviewTasks($appGroupIdentity, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listQuotaReviewTasksWithOptions($appGroupIdentity, $request, $headers, $runtime);
    }

    /**
     * @param string                      $appGroupIdentity
     * @param ListQuotaReviewTasksRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ListQuotaReviewTasksResponse
     */
    public function listQuotaReviewTasksWithOptions($appGroupIdentity, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $query            = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListQuotaReviewTasks',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/quota-review-tasks',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListQuotaReviewTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return ListRamRolesResponse
     */
    public function listRamRoles()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRamRolesWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListRamRolesResponse
     */
    public function listRamRolesWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListRamRoles',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/assist/ram/roles',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRamRolesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                    $appGroupIdentity
     * @param ListScheduledTasksRequest $request
     *
     * @return ListScheduledTasksResponse
     */
    public function listScheduledTasks($appGroupIdentity, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listScheduledTasksWithOptions($appGroupIdentity, $request, $headers, $runtime);
    }

    /**
     * @param string                    $appGroupIdentity
     * @param ListScheduledTasksRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ListScheduledTasksResponse
     */
    public function listScheduledTasksWithOptions($appGroupIdentity, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $query            = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListScheduledTasks',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/scheduled-tasks',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListScheduledTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $appId
     *
     * @return ListSearchStrategiesResponse
     */
    public function listSearchStrategies($appGroupIdentity, $appId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSearchStrategiesWithOptions($appGroupIdentity, $appId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $appId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListSearchStrategiesResponse
     */
    public function listSearchStrategiesWithOptions($appGroupIdentity, $appId, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $appId            = OpenApiUtilClient::getEncodeParam($appId);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListSearchStrategies',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/' . $appId . '/search-strategies',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSearchStrategiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $appId
     *
     * @return ListSecondRanksResponse
     */
    public function listSecondRanks($appGroupIdentity, $appId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSecondRanksWithOptions($appGroupIdentity, $appId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $appId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListSecondRanksResponse
     */
    public function listSecondRanksWithOptions($appGroupIdentity, $appId, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $appId            = OpenApiUtilClient::getEncodeParam($appId);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListSecondRanks',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/' . $appId . '/second-ranks',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSecondRanksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     *
     * @return ListSlowQueryCategoriesResponse
     */
    public function listSlowQueryCategories($appGroupIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSlowQueryCategoriesWithOptions($appGroupIdentity, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListSlowQueryCategoriesResponse
     */
    public function listSlowQueryCategoriesWithOptions($appGroupIdentity, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListSlowQueryCategories',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/optimizers/slow-query/categories',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSlowQueryCategoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $categoryIndex
     *
     * @return ListSlowQueryQueriesResponse
     */
    public function listSlowQueryQueries($appGroupIdentity, $categoryIndex)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSlowQueryQueriesWithOptions($appGroupIdentity, $categoryIndex, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $categoryIndex
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListSlowQueryQueriesResponse
     */
    public function listSlowQueryQueriesWithOptions($appGroupIdentity, $categoryIndex, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $categoryIndex    = OpenApiUtilClient::getEncodeParam($categoryIndex);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListSlowQueryQueries',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/optimizers/slow-query/categories/' . $categoryIndex . '/queries',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSlowQueryQueriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $appId
     *
     * @return ListSortExpressionsResponse
     */
    public function listSortExpressions($appGroupIdentity, $appId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSortExpressionsWithOptions($appGroupIdentity, $appId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $appId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListSortExpressionsResponse
     */
    public function listSortExpressionsWithOptions($appGroupIdentity, $appId, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $appId            = OpenApiUtilClient::getEncodeParam($appId);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListSortExpressions',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/' . $appId . '/sort-expressions',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSortExpressionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $appVersionId
     *
     * @return ListSortScriptsResponse
     */
    public function listSortScripts($appGroupIdentity, $appVersionId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSortScriptsWithOptions($appGroupIdentity, $appVersionId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $appVersionId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ListSortScriptsResponse
     */
    public function listSortScriptsWithOptions($appGroupIdentity, $appVersionId, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $appVersionId     = OpenApiUtilClient::getEncodeParam($appVersionId);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ListSortScripts',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/' . $appVersionId . '/sort-scripts',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSortScriptsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                   $appGroupIdentity
     * @param string                   $moduleName
     * @param ListStatisticLogsRequest $request
     *
     * @return ListStatisticLogsResponse
     */
    public function listStatisticLogs($appGroupIdentity, $moduleName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listStatisticLogsWithOptions($appGroupIdentity, $moduleName, $request, $headers, $runtime);
    }

    /**
     * @param string                   $appGroupIdentity
     * @param string                   $moduleName
     * @param ListStatisticLogsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListStatisticLogsResponse
     */
    public function listStatisticLogsWithOptions($appGroupIdentity, $moduleName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $moduleName       = OpenApiUtilClient::getEncodeParam($moduleName);
        $query            = [];
        if (!Utils::isUnset($request->columns)) {
            $query['columns'] = $request->columns;
        }
        if (!Utils::isUnset($request->distinct)) {
            $query['distinct'] = $request->distinct;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->query)) {
            $query['query'] = $request->query;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['sortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['startTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->stopTime)) {
            $query['stopTime'] = $request->stopTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListStatisticLogs',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/statistic-logs/' . $moduleName . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListStatisticLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                     $appGroupIdentity
     * @param string                     $moduleName
     * @param ListStatisticReportRequest $request
     *
     * @return ListStatisticReportResponse
     */
    public function listStatisticReport($appGroupIdentity, $moduleName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listStatisticReportWithOptions($appGroupIdentity, $moduleName, $request, $headers, $runtime);
    }

    /**
     * @param string                     $appGroupIdentity
     * @param string                     $moduleName
     * @param ListStatisticReportRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return ListStatisticReportResponse
     */
    public function listStatisticReportWithOptions($appGroupIdentity, $moduleName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $moduleName       = OpenApiUtilClient::getEncodeParam($moduleName);
        $query            = [];
        if (!Utils::isUnset($request->columns)) {
            $query['columns'] = $request->columns;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->query)) {
            $query['query'] = $request->query;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['startTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListStatisticReport',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/statistic-report/' . $moduleName . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListStatisticReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                         $name
     * @param ListUserAnalyzerEntriesRequest $request
     *
     * @return ListUserAnalyzerEntriesResponse
     */
    public function listUserAnalyzerEntries($name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listUserAnalyzerEntriesWithOptions($name, $request, $headers, $runtime);
    }

    /**
     * @param string                         $name
     * @param ListUserAnalyzerEntriesRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListUserAnalyzerEntriesResponse
     */
    public function listUserAnalyzerEntriesWithOptions($name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $name  = OpenApiUtilClient::getEncodeParam($name);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->word)) {
            $query['word'] = $request->word;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUserAnalyzerEntries',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/user-analyzers/' . $name . '/entries',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListUserAnalyzerEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListUserAnalyzersRequest $request
     *
     * @return ListUserAnalyzersResponse
     */
    public function listUserAnalyzers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listUserAnalyzersWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListUserAnalyzersRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListUserAnalyzersResponse
     */
    public function listUserAnalyzersWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['pageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUserAnalyzers',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/user-analyzers',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListUserAnalyzersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     *
     * @return ModifyAppGroupResponse
     */
    public function modifyAppGroup($appGroupIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyAppGroupWithOptions($appGroupIdentity, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ModifyAppGroupResponse
     */
    public function modifyAppGroupWithOptions($appGroupIdentity, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ModifyAppGroup',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyAppGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     *
     * @return ModifyAppGroupQuotaResponse
     */
    public function modifyAppGroupQuota($appGroupIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyAppGroupQuotaWithOptions($appGroupIdentity, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ModifyAppGroupQuotaResponse
     */
    public function modifyAppGroupQuotaWithOptions($appGroupIdentity, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ModifyAppGroupQuota',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/quota',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyAppGroupQuotaResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                 $appGroupIdentity
     * @param string                 $appId
     * @param string                 $name
     * @param ModifyFirstRankRequest $request
     *
     * @return ModifyFirstRankResponse
     */
    public function modifyFirstRank($appGroupIdentity, $appId, $name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyFirstRankWithOptions($appGroupIdentity, $appId, $name, $request, $headers, $runtime);
    }

    /**
     * @param string                 $appGroupIdentity
     * @param string                 $appId
     * @param string                 $name
     * @param ModifyFirstRankRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyFirstRankResponse
     */
    public function modifyFirstRankWithOptions($appGroupIdentity, $appId, $name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $appId            = OpenApiUtilClient::getEncodeParam($appId);
        $name             = OpenApiUtilClient::getEncodeParam($name);
        $query            = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['dryRun'] = $request->dryRun;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyFirstRank',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/' . $appId . '/first-ranks/' . $name . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyFirstRankResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $modelName
     *
     * @return ModifyModelResponse
     */
    public function modifyModel($appGroupIdentity, $modelName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyModelWithOptions($appGroupIdentity, $modelName, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $modelName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ModifyModelResponse
     */
    public function modifyModelWithOptions($appGroupIdentity, $modelName, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $modelName        = OpenApiUtilClient::getEncodeParam($modelName);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ModifyModel',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/algorithm/models/' . $modelName . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                      $appGroupIdentity
     * @param string                      $appId
     * @param string                      $name
     * @param ModifyQueryProcessorRequest $request
     *
     * @return ModifyQueryProcessorResponse
     */
    public function modifyQueryProcessor($appGroupIdentity, $appId, $name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyQueryProcessorWithOptions($appGroupIdentity, $appId, $name, $request, $headers, $runtime);
    }

    /**
     * @param string                      $appGroupIdentity
     * @param string                      $appId
     * @param string                      $name
     * @param ModifyQueryProcessorRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyQueryProcessorResponse
     */
    public function modifyQueryProcessorWithOptions($appGroupIdentity, $appId, $name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $appId            = OpenApiUtilClient::getEncodeParam($appId);
        $name             = OpenApiUtilClient::getEncodeParam($name);
        $query            = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['dryRun'] = $request->dryRun;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyQueryProcessor',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/' . $appId . '/query-processors/' . $name . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyQueryProcessorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $taskId
     *
     * @return ModifyScheduledTaskResponse
     */
    public function modifyScheduledTask($appGroupIdentity, $taskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifyScheduledTaskWithOptions($appGroupIdentity, $taskId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $taskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ModifyScheduledTaskResponse
     */
    public function modifyScheduledTaskWithOptions($appGroupIdentity, $taskId, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $taskId           = OpenApiUtilClient::getEncodeParam($taskId);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ModifyScheduledTask',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/scheduled-tasks/' . $taskId . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifyScheduledTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                  $appGroupIdentity
     * @param string                  $appId
     * @param string                  $name
     * @param ModifySecondRankRequest $request
     *
     * @return ModifySecondRankResponse
     */
    public function modifySecondRank($appGroupIdentity, $appId, $name, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->modifySecondRankWithOptions($appGroupIdentity, $appId, $name, $request, $headers, $runtime);
    }

    /**
     * @param string                  $appGroupIdentity
     * @param string                  $appId
     * @param string                  $name
     * @param ModifySecondRankRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ModifySecondRankResponse
     */
    public function modifySecondRankWithOptions($appGroupIdentity, $appId, $name, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $appId            = OpenApiUtilClient::getEncodeParam($appId);
        $name             = OpenApiUtilClient::getEncodeParam($name);
        $query            = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['dryRun'] = $request->dryRun;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifySecondRank',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/' . $appId . '/second-ranks/' . $name . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifySecondRankResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string              $appGroupIdentity
     * @param string              $modelName
     * @param PreviewModelRequest $request
     *
     * @return PreviewModelResponse
     */
    public function previewModel($appGroupIdentity, $modelName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->previewModelWithOptions($appGroupIdentity, $modelName, $request, $headers, $runtime);
    }

    /**
     * @param string              $appGroupIdentity
     * @param string              $modelName
     * @param PreviewModelRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return PreviewModelResponse
     */
    public function previewModelWithOptions($appGroupIdentity, $modelName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $modelName        = OpenApiUtilClient::getEncodeParam($modelName);
        $query            = [];
        if (!Utils::isUnset($request->query)) {
            $query['query'] = $request->query;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PreviewModel',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/algorithm/models/' . $modelName . '/actions/preview',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PreviewModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $name
     *
     * @return PushInterventionDictionaryEntriesResponse
     */
    public function pushInterventionDictionaryEntries($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pushInterventionDictionaryEntriesWithOptions($name, $headers, $runtime);
    }

    /**
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return PushInterventionDictionaryEntriesResponse
     */
    public function pushInterventionDictionaryEntriesWithOptions($name, $headers, $runtime)
    {
        $name = OpenApiUtilClient::getEncodeParam($name);
        $req  = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'PushInterventionDictionaryEntries',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/intervention-dictionaries/' . $name . '/entries/actions/bulk',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PushInterventionDictionaryEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $name
     *
     * @return PushUserAnalyzerEntriesResponse
     */
    public function pushUserAnalyzerEntries($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->pushUserAnalyzerEntriesWithOptions($name, $headers, $runtime);
    }

    /**
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return PushUserAnalyzerEntriesResponse
     */
    public function pushUserAnalyzerEntriesWithOptions($name, $headers, $runtime)
    {
        $name = OpenApiUtilClient::getEncodeParam($name);
        $req  = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'PushUserAnalyzerEntries',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/user-analyzers/' . $name . '/entries/actions/bulk',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return PushUserAnalyzerEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $modelName
     *
     * @return RankPreviewQueryResponse
     */
    public function rankPreviewQuery($appGroupIdentity, $modelName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->rankPreviewQueryWithOptions($appGroupIdentity, $modelName, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $modelName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RankPreviewQueryResponse
     */
    public function rankPreviewQueryWithOptions($appGroupIdentity, $modelName, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $modelName        = OpenApiUtilClient::getEncodeParam($modelName);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'RankPreviewQuery',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/algorithm/models/' . $modelName . '/actions/query-rank',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RankPreviewQueryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $scriptName
     * @param string $appVersionId
     *
     * @return ReleaseSortScriptResponse
     */
    public function releaseSortScript($appGroupIdentity, $scriptName, $appVersionId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->releaseSortScriptWithOptions($appGroupIdentity, $scriptName, $appVersionId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $scriptName
     * @param string         $appVersionId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ReleaseSortScriptResponse
     */
    public function releaseSortScriptWithOptions($appGroupIdentity, $scriptName, $appVersionId, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $scriptName       = OpenApiUtilClient::getEncodeParam($scriptName);
        $appVersionId     = OpenApiUtilClient::getEncodeParam($appVersionId);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ReleaseSortScript',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/' . $appVersionId . '/sort-scripts/' . $scriptName . '/actions/release',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ReleaseSortScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $appId
     *
     * @return RemoveAppResponse
     */
    public function removeApp($appGroupIdentity, $appId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeAppWithOptions($appGroupIdentity, $appId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $appId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RemoveAppResponse
     */
    public function removeAppWithOptions($appGroupIdentity, $appId, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $appId            = OpenApiUtilClient::getEncodeParam($appId);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'RemoveApp',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/' . $appId . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RemoveAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     *
     * @return RemoveAppGroupResponse
     */
    public function removeAppGroup($appGroupIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeAppGroupWithOptions($appGroupIdentity, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RemoveAppGroupResponse
     */
    public function removeAppGroupWithOptions($appGroupIdentity, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'RemoveAppGroup',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RemoveAppGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $dataCollectionIdentity
     *
     * @return RemoveDataCollectionResponse
     */
    public function removeDataCollection($appGroupIdentity, $dataCollectionIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeDataCollectionWithOptions($appGroupIdentity, $dataCollectionIdentity, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $dataCollectionIdentity
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RemoveDataCollectionResponse
     */
    public function removeDataCollectionWithOptions($appGroupIdentity, $dataCollectionIdentity, $headers, $runtime)
    {
        $appGroupIdentity       = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $dataCollectionIdentity = OpenApiUtilClient::getEncodeParam($dataCollectionIdentity);
        $req                    = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'RemoveDataCollection',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/data-collections/' . $dataCollectionIdentity . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RemoveDataCollectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $appId
     * @param string $name
     *
     * @return RemoveFirstRankResponse
     */
    public function removeFirstRank($appGroupIdentity, $appId, $name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeFirstRankWithOptions($appGroupIdentity, $appId, $name, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $appId
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RemoveFirstRankResponse
     */
    public function removeFirstRankWithOptions($appGroupIdentity, $appId, $name, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $appId            = OpenApiUtilClient::getEncodeParam($appId);
        $name             = OpenApiUtilClient::getEncodeParam($name);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'RemoveFirstRank',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/' . $appId . '/first-ranks/' . $name . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RemoveFirstRankResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $name
     *
     * @return RemoveInterventionDictionaryResponse
     */
    public function removeInterventionDictionary($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeInterventionDictionaryWithOptions($name, $headers, $runtime);
    }

    /**
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RemoveInterventionDictionaryResponse
     */
    public function removeInterventionDictionaryWithOptions($name, $headers, $runtime)
    {
        $name = OpenApiUtilClient::getEncodeParam($name);
        $req  = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'RemoveInterventionDictionary',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/intervention-dictionaries/' . $name . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RemoveInterventionDictionaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $appId
     * @param string $name
     *
     * @return RemoveQueryProcessorResponse
     */
    public function removeQueryProcessor($appGroupIdentity, $appId, $name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeQueryProcessorWithOptions($appGroupIdentity, $appId, $name, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $appId
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RemoveQueryProcessorResponse
     */
    public function removeQueryProcessorWithOptions($appGroupIdentity, $appId, $name, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $appId            = OpenApiUtilClient::getEncodeParam($appId);
        $name             = OpenApiUtilClient::getEncodeParam($name);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'RemoveQueryProcessor',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/' . $appId . '/query-processors/' . $name . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RemoveQueryProcessorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $taskId
     *
     * @return RemoveScheduledTaskResponse
     */
    public function removeScheduledTask($appGroupIdentity, $taskId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeScheduledTaskWithOptions($appGroupIdentity, $taskId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $taskId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RemoveScheduledTaskResponse
     */
    public function removeScheduledTaskWithOptions($appGroupIdentity, $taskId, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $taskId           = OpenApiUtilClient::getEncodeParam($taskId);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'RemoveScheduledTask',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/scheduled-tasks/' . $taskId . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RemoveScheduledTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $appId
     * @param string $strategyName
     *
     * @return RemoveSearchStrategyResponse
     */
    public function removeSearchStrategy($appGroupIdentity, $appId, $strategyName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeSearchStrategyWithOptions($appGroupIdentity, $appId, $strategyName, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $appId
     * @param string         $strategyName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RemoveSearchStrategyResponse
     */
    public function removeSearchStrategyWithOptions($appGroupIdentity, $appId, $strategyName, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $appId            = OpenApiUtilClient::getEncodeParam($appId);
        $strategyName     = OpenApiUtilClient::getEncodeParam($strategyName);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'RemoveSearchStrategy',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/' . $appId . '/search-strategies/' . $strategyName . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RemoveSearchStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $appId
     * @param string $name
     *
     * @return RemoveSecondRankResponse
     */
    public function removeSecondRank($appGroupIdentity, $appId, $name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeSecondRankWithOptions($appGroupIdentity, $appId, $name, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $appId
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RemoveSecondRankResponse
     */
    public function removeSecondRankWithOptions($appGroupIdentity, $appId, $name, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $appId            = OpenApiUtilClient::getEncodeParam($appId);
        $name             = OpenApiUtilClient::getEncodeParam($name);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'RemoveSecondRank',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/' . $appId . '/second-ranks/' . $name . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RemoveSecondRankResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $name
     *
     * @return RemoveUserAnalyzerResponse
     */
    public function removeUserAnalyzer($name)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->removeUserAnalyzerWithOptions($name, $headers, $runtime);
    }

    /**
     * @param string         $name
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RemoveUserAnalyzerResponse
     */
    public function removeUserAnalyzerWithOptions($name, $headers, $runtime)
    {
        $name = OpenApiUtilClient::getEncodeParam($name);
        $req  = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'RemoveUserAnalyzer',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/user-analyzers/' . $name . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RemoveUserAnalyzerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     *
     * @return RenewAppGroupResponse
     */
    public function renewAppGroup($appGroupIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->renewAppGroupWithOptions($appGroupIdentity, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return RenewAppGroupResponse
     */
    public function renewAppGroupWithOptions($appGroupIdentity, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'RenewAppGroup',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/actions/renew',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RenewAppGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     *
     * @return ReplaceAppGroupCommodityCodeResponse
     */
    public function replaceAppGroupCommodityCode($appGroupIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->replaceAppGroupCommodityCodeWithOptions($appGroupIdentity, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ReplaceAppGroupCommodityCodeResponse
     */
    public function replaceAppGroupCommodityCodeWithOptions($appGroupIdentity, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ReplaceAppGroupCommodityCode',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/actions/to-instance-typed',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ReplaceAppGroupCommodityCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $scriptName
     * @param string $appVersionId
     * @param string $fileName
     *
     * @return SaveSortScriptFileResponse
     */
    public function saveSortScriptFile($appGroupIdentity, $scriptName, $appVersionId, $fileName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->saveSortScriptFileWithOptions($appGroupIdentity, $scriptName, $appVersionId, $fileName, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $scriptName
     * @param string         $appVersionId
     * @param string         $fileName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return SaveSortScriptFileResponse
     */
    public function saveSortScriptFileWithOptions($appGroupIdentity, $scriptName, $appVersionId, $fileName, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $scriptName       = OpenApiUtilClient::getEncodeParam($scriptName);
        $appVersionId     = OpenApiUtilClient::getEncodeParam($appVersionId);
        $fileName         = OpenApiUtilClient::getEncodeParam($fileName);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'SaveSortScriptFile',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/' . $appVersionId . '/sort-scripts/' . $scriptName . '/files/src/' . $fileName . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SaveSortScriptFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     *
     * @return StartSlowQueryAnalyzerResponse
     */
    public function startSlowQueryAnalyzer($appGroupIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startSlowQueryAnalyzerWithOptions($appGroupIdentity, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StartSlowQueryAnalyzerResponse
     */
    public function startSlowQueryAnalyzerWithOptions($appGroupIdentity, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StartSlowQueryAnalyzer',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/optimizers/slow-query/actions/run',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StartSlowQueryAnalyzerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $modelName
     *
     * @return TrainModelResponse
     */
    public function trainModel($appGroupIdentity, $modelName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->trainModelWithOptions($appGroupIdentity, $modelName, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $modelName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return TrainModelResponse
     */
    public function trainModelWithOptions($appGroupIdentity, $modelName, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $modelName        = OpenApiUtilClient::getEncodeParam($modelName);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'TrainModel',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/algorithm/models/' . $modelName . '/actions/train',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return TrainModelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $esInstanceId
     *
     * @return UnbindESUserAnalyzerResponse
     */
    public function unbindESUserAnalyzer($appGroupIdentity, $esInstanceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->unbindESUserAnalyzerWithOptions($appGroupIdentity, $esInstanceId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $esInstanceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return UnbindESUserAnalyzerResponse
     */
    public function unbindESUserAnalyzerWithOptions($appGroupIdentity, $esInstanceId, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $esInstanceId     = OpenApiUtilClient::getEncodeParam($esInstanceId);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'UnbindESUserAnalyzer',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/es/' . $esInstanceId . '/actions/unbind-analyzer',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UnbindESUserAnalyzerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     *
     * @return UnbindEsInstanceResponse
     */
    public function unbindEsInstance($appGroupIdentity)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->unbindEsInstanceWithOptions($appGroupIdentity, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return UnbindEsInstanceResponse
     */
    public function unbindEsInstanceWithOptions($appGroupIdentity, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'UnbindEsInstance',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/actions/unbind-es-instance',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UnbindEsInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $sceneId
     * @param string $groupId
     * @param string $experimentId
     *
     * @return UpdateABTestExperimentResponse
     */
    public function updateABTestExperiment($appGroupIdentity, $sceneId, $groupId, $experimentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateABTestExperimentWithOptions($appGroupIdentity, $sceneId, $groupId, $experimentId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $sceneId
     * @param string         $groupId
     * @param string         $experimentId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return UpdateABTestExperimentResponse
     */
    public function updateABTestExperimentWithOptions($appGroupIdentity, $sceneId, $groupId, $experimentId, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $sceneId          = OpenApiUtilClient::getEncodeParam($sceneId);
        $groupId          = OpenApiUtilClient::getEncodeParam($groupId);
        $experimentId     = OpenApiUtilClient::getEncodeParam($experimentId);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'UpdateABTestExperiment',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/scenes/' . $sceneId . '/groups/' . $groupId . '/experiments/' . $experimentId . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateABTestExperimentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $sceneId
     * @param string $groupId
     * @param string $experimentId
     *
     * @return UpdateABTestFixedFlowDividersResponse
     */
    public function updateABTestFixedFlowDividers($appGroupIdentity, $sceneId, $groupId, $experimentId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateABTestFixedFlowDividersWithOptions($appGroupIdentity, $sceneId, $groupId, $experimentId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $sceneId
     * @param string         $groupId
     * @param string         $experimentId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return UpdateABTestFixedFlowDividersResponse
     */
    public function updateABTestFixedFlowDividersWithOptions($appGroupIdentity, $sceneId, $groupId, $experimentId, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $sceneId          = OpenApiUtilClient::getEncodeParam($sceneId);
        $groupId          = OpenApiUtilClient::getEncodeParam($groupId);
        $experimentId     = OpenApiUtilClient::getEncodeParam($experimentId);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'UpdateABTestFixedFlowDividers',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/scenes/' . $sceneId . '/groups/' . $groupId . '/experiments/' . $experimentId . '/fixed-flow-dividers',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateABTestFixedFlowDividersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $sceneId
     * @param string $groupId
     *
     * @return UpdateABTestGroupResponse
     */
    public function updateABTestGroup($appGroupIdentity, $sceneId, $groupId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateABTestGroupWithOptions($appGroupIdentity, $sceneId, $groupId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $sceneId
     * @param string         $groupId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return UpdateABTestGroupResponse
     */
    public function updateABTestGroupWithOptions($appGroupIdentity, $sceneId, $groupId, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $sceneId          = OpenApiUtilClient::getEncodeParam($sceneId);
        $groupId          = OpenApiUtilClient::getEncodeParam($groupId);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'UpdateABTestGroup',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/scenes/' . $sceneId . '/groups/' . $groupId . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateABTestGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $sceneId
     *
     * @return UpdateABTestSceneResponse
     */
    public function updateABTestScene($appGroupIdentity, $sceneId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateABTestSceneWithOptions($appGroupIdentity, $sceneId, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $sceneId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return UpdateABTestSceneResponse
     */
    public function updateABTestSceneWithOptions($appGroupIdentity, $sceneId, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $sceneId          = OpenApiUtilClient::getEncodeParam($sceneId);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'UpdateABTestScene',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/scenes/' . $sceneId . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateABTestSceneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                   $appGroupIdentity
     * @param string                   $appId
     * @param UpdateFetchFieldsRequest $request
     *
     * @return UpdateFetchFieldsResponse
     */
    public function updateFetchFields($appGroupIdentity, $appId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFetchFieldsWithOptions($appGroupIdentity, $appId, $request, $headers, $runtime);
    }

    /**
     * @param string                   $appGroupIdentity
     * @param string                   $appId
     * @param UpdateFetchFieldsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateFetchFieldsResponse
     */
    public function updateFetchFieldsWithOptions($appGroupIdentity, $appId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $appId            = OpenApiUtilClient::getEncodeParam($appId);
        $query            = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['dryRun'] = $request->dryRun;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateFetchFields',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/' . $appId . '/fetch-fields',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateFetchFieldsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                               $appGroupIdentity
     * @param string                               $functionName
     * @param UpdateFunctionDefaultInstanceRequest $request
     *
     * @return UpdateFunctionDefaultInstanceResponse
     */
    public function updateFunctionDefaultInstance($appGroupIdentity, $functionName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFunctionDefaultInstanceWithOptions($appGroupIdentity, $functionName, $request, $headers, $runtime);
    }

    /**
     * @param string                               $appGroupIdentity
     * @param string                               $functionName
     * @param UpdateFunctionDefaultInstanceRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateFunctionDefaultInstanceResponse
     */
    public function updateFunctionDefaultInstanceWithOptions($appGroupIdentity, $functionName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $functionName     = OpenApiUtilClient::getEncodeParam($functionName);
        $body             = [];
        if (!Utils::isUnset($request->instanceName)) {
            $body['instanceName'] = $request->instanceName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateFunctionDefaultInstance',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/functions/' . $functionName . '/default-instance',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateFunctionDefaultInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                        $appGroupIdentity
     * @param string                        $functionName
     * @param string                        $instanceName
     * @param UpdateFunctionInstanceRequest $request
     *
     * @return UpdateFunctionInstanceResponse
     */
    public function updateFunctionInstance($appGroupIdentity, $functionName, $instanceName, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateFunctionInstanceWithOptions($appGroupIdentity, $functionName, $instanceName, $request, $headers, $runtime);
    }

    /**
     * @param string                        $appGroupIdentity
     * @param string                        $functionName
     * @param string                        $instanceName
     * @param UpdateFunctionInstanceRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateFunctionInstanceResponse
     */
    public function updateFunctionInstanceWithOptions($appGroupIdentity, $functionName, $instanceName, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $functionName     = OpenApiUtilClient::getEncodeParam($functionName);
        $instanceName     = OpenApiUtilClient::getEncodeParam($instanceName);
        $body             = [];
        if (!Utils::isUnset($request->createParameters)) {
            $body['createParameters'] = $request->createParameters;
        }
        if (!Utils::isUnset($request->cron)) {
            $body['cron'] = $request->cron;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateFunctionInstance',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/functions/' . $functionName . '/instances/' . $instanceName . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateFunctionInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $appId
     * @param string $strategyName
     *
     * @return UpdateSearchStrategyResponse
     */
    public function updateSearchStrategy($appGroupIdentity, $appId, $strategyName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSearchStrategyWithOptions($appGroupIdentity, $appId, $strategyName, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $appId
     * @param string         $strategyName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return UpdateSearchStrategyResponse
     */
    public function updateSearchStrategyWithOptions($appGroupIdentity, $appId, $strategyName, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $appId            = OpenApiUtilClient::getEncodeParam($appId);
        $strategyName     = OpenApiUtilClient::getEncodeParam($strategyName);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'UpdateSearchStrategy',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/' . $appId . '/search-strategies/' . $strategyName . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateSearchStrategyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $appGroupIdentity
     * @param string $appVersionId
     * @param string $scriptName
     *
     * @return UpdateSortScriptResponse
     */
    public function updateSortScript($appGroupIdentity, $appVersionId, $scriptName)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSortScriptWithOptions($appGroupIdentity, $appVersionId, $scriptName, $headers, $runtime);
    }

    /**
     * @param string         $appGroupIdentity
     * @param string         $appVersionId
     * @param string         $scriptName
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return UpdateSortScriptResponse
     */
    public function updateSortScriptWithOptions($appGroupIdentity, $appVersionId, $scriptName, $headers, $runtime)
    {
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $appVersionId     = OpenApiUtilClient::getEncodeParam($appVersionId);
        $scriptName       = OpenApiUtilClient::getEncodeParam($scriptName);
        $req              = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'UpdateSortScript',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/' . $appVersionId . '/sort-scripts/' . $scriptName . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateSortScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                 $appGroupIdentity
     * @param string                 $appId
     * @param UpdateSummariesRequest $request
     *
     * @return UpdateSummariesResponse
     */
    public function updateSummaries($appGroupIdentity, $appId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSummariesWithOptions($appGroupIdentity, $appId, $request, $headers, $runtime);
    }

    /**
     * @param string                 $appGroupIdentity
     * @param string                 $appId
     * @param UpdateSummariesRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateSummariesResponse
     */
    public function updateSummariesWithOptions($appGroupIdentity, $appId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $appGroupIdentity = OpenApiUtilClient::getEncodeParam($appGroupIdentity);
        $appId            = OpenApiUtilClient::getEncodeParam($appId);
        $query            = [];
        if (!Utils::isUnset($request->dryRun)) {
            $query['dryRun'] = $request->dryRun;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateSummaries',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/app-groups/' . $appGroupIdentity . '/apps/' . $appId . '/summaries',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateSummariesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return ValidateDataSourcesResponse
     */
    public function validateDataSources()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->validateDataSourcesWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return ValidateDataSourcesResponse
     */
    public function validateDataSourcesWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'ValidateDataSources',
            'version'     => '2017-12-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/v4/openapi/assist/data-sources/validations',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ValidateDataSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }
}
