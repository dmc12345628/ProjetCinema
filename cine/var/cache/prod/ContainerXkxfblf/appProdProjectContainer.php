<?php

namespace ContainerXkxfblf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/*
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class appProdProjectContainer extends Container
{
    private $buildParameters;
    private $parameters;
    private $targetDirs = array();

    public function __construct(array $buildParameters = array())
    {
        $dir = $this->targetDirs[0] = \dirname(__DIR__);
        for ($i = 1; $i <= 5; ++$i) {
            $this->targetDirs[$i] = $dir = \dirname($dir);
        }
        $this->buildParameters = $buildParameters;
        $this->parameters = $this->getDefaultParameters();

        $this->services = array();
        $this->normalizedIds = array(
            'fos\\restbundle\\request\\paramfetcherinterface' => 'FOS\\RestBundle\\Request\\ParamFetcherInterface',
            'fos\\restbundle\\view\\viewhandlerinterface' => 'FOS\\RestBundle\\View\\ViewHandlerInterface',
            'symfony\\bundle\\frameworkbundle\\controller\\redirectcontroller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController',
            'symfony\\bundle\\frameworkbundle\\controller\\templatecontroller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController',
        );
        $this->syntheticIds = array(
            'kernel' => true,
        );
        $this->methodMap = array(
            'annotation_reader' => 'getAnnotationReaderService',
            'annotations.reader' => 'getAnnotations_ReaderService',
            'config_cache_factory' => 'getConfigCacheFactoryService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'debug.debug_handlers_listener' => 'getDebug_DebugHandlersListenerService',
            'debug.file_link_formatter' => 'getDebug_FileLinkFormatterService',
            'doctrine' => 'getDoctrineService',
            'event_dispatcher' => 'getEventDispatcherService',
            'fos_rest.body_listener' => 'getFosRest_BodyListenerService',
            'fos_rest.decoder_provider' => 'getFosRest_DecoderProviderService',
            'fos_rest.format_listener' => 'getFosRest_FormatListenerService',
            'fos_rest.format_negotiator' => 'getFosRest_FormatNegotiatorService',
            'fragment.listener' => 'getFragment_ListenerService',
            'http_kernel' => 'getHttpKernelService',
            'locale_listener' => 'getLocaleListenerService',
            'monolog.handler.console' => 'getMonolog_Handler_ConsoleService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.handler.nested' => 'getMonolog_Handler_NestedService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'monolog.processor.psr_log_message' => 'getMonolog_Processor_PsrLogMessageService',
            'request_stack' => 'getRequestStackService',
            'resolve_controller_name_subscriber' => 'getResolveControllerNameSubscriberService',
            'response_listener' => 'getResponseListenerService',
            'router' => 'getRouterService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router_listener' => 'getRouterListenerService',
            'security.access.decision_manager' => 'getSecurity_Access_DecisionManagerService',
            'security.authentication.manager' => 'getSecurity_Authentication_ManagerService',
            'security.authentication.trust_resolver' => 'getSecurity_Authentication_TrustResolverService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.firewall' => 'getSecurity_FirewallService',
            'security.logout_url_generator' => 'getSecurity_LogoutUrlGeneratorService',
            'security.rememberme.response_listener' => 'getSecurity_Rememberme_ResponseListenerService',
            'security.role_hierarchy' => 'getSecurity_RoleHierarchyService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'sensio_framework_extra.cache.listener' => 'getSensioFrameworkExtra_Cache_ListenerService',
            'sensio_framework_extra.controller.listener' => 'getSensioFrameworkExtra_Controller_ListenerService',
            'sensio_framework_extra.converter.datetime' => 'getSensioFrameworkExtra_Converter_DatetimeService',
            'sensio_framework_extra.converter.doctrine.orm' => 'getSensioFrameworkExtra_Converter_Doctrine_OrmService',
            'sensio_framework_extra.converter.listener' => 'getSensioFrameworkExtra_Converter_ListenerService',
            'sensio_framework_extra.converter.manager' => 'getSensioFrameworkExtra_Converter_ManagerService',
            'sensio_framework_extra.security.listener' => 'getSensioFrameworkExtra_Security_ListenerService',
            'sensio_framework_extra.view.listener' => 'getSensioFrameworkExtra_View_ListenerService',
            'session.save_listener' => 'getSession_SaveListenerService',
            'session_listener' => 'getSessionListenerService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'uri_signer' => 'getUriSignerService',
            'validate_request_listener' => 'getValidateRequestListenerService',
        );
        $this->fileMap = array(
            'FOS\\RestBundle\\View\\ViewHandlerInterface' => __DIR__.'/getViewHandlerInterfaceService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController' => __DIR__.'/getRedirectControllerService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' => __DIR__.'/getTemplateControllerService.php',
            'annotations.cache' => __DIR__.'/getAnnotations_CacheService.php',
            'annotations.cache_warmer' => __DIR__.'/getAnnotations_CacheWarmerService.php',
            'argument_resolver.default' => __DIR__.'/getArgumentResolver_DefaultService.php',
            'argument_resolver.request' => __DIR__.'/getArgumentResolver_RequestService.php',
            'argument_resolver.request_attribute' => __DIR__.'/getArgumentResolver_RequestAttributeService.php',
            'argument_resolver.service' => __DIR__.'/getArgumentResolver_ServiceService.php',
            'argument_resolver.session' => __DIR__.'/getArgumentResolver_SessionService.php',
            'argument_resolver.variadic' => __DIR__.'/getArgumentResolver_VariadicService.php',
            'assets.context' => __DIR__.'/getAssets_ContextService.php',
            'assets.packages' => __DIR__.'/getAssets_PackagesService.php',
            'cache.annotations' => __DIR__.'/getCache_AnnotationsService.php',
            'cache.app' => __DIR__.'/getCache_AppService.php',
            'cache.default_clearer' => __DIR__.'/getCache_DefaultClearerService.php',
            'cache.global_clearer' => __DIR__.'/getCache_GlobalClearerService.php',
            'cache.property_access' => __DIR__.'/getCache_PropertyAccessService.php',
            'cache.serializer' => __DIR__.'/getCache_SerializerService.php',
            'cache.system' => __DIR__.'/getCache_SystemService.php',
            'cache.system_clearer' => __DIR__.'/getCache_SystemClearerService.php',
            'cache.validator' => __DIR__.'/getCache_ValidatorService.php',
            'cache_clearer' => __DIR__.'/getCacheClearerService.php',
            'cache_warmer' => __DIR__.'/getCacheWarmerService.php',
            'console.command.about' => __DIR__.'/getConsole_Command_AboutService.php',
            'console.command.assets_install' => __DIR__.'/getConsole_Command_AssetsInstallService.php',
            'console.command.cache_clear' => __DIR__.'/getConsole_Command_CacheClearService.php',
            'console.command.cache_pool_clear' => __DIR__.'/getConsole_Command_CachePoolClearService.php',
            'console.command.cache_pool_prune' => __DIR__.'/getConsole_Command_CachePoolPruneService.php',
            'console.command.cache_warmup' => __DIR__.'/getConsole_Command_CacheWarmupService.php',
            'console.command.config_debug' => __DIR__.'/getConsole_Command_ConfigDebugService.php',
            'console.command.config_dump_reference' => __DIR__.'/getConsole_Command_ConfigDumpReferenceService.php',
            'console.command.container_debug' => __DIR__.'/getConsole_Command_ContainerDebugService.php',
            'console.command.debug_autowiring' => __DIR__.'/getConsole_Command_DebugAutowiringService.php',
            'console.command.event_dispatcher_debug' => __DIR__.'/getConsole_Command_EventDispatcherDebugService.php',
            'console.command.form_debug' => __DIR__.'/getConsole_Command_FormDebugService.php',
            'console.command.router_debug' => __DIR__.'/getConsole_Command_RouterDebugService.php',
            'console.command.router_match' => __DIR__.'/getConsole_Command_RouterMatchService.php',
            'console.command.xliff_lint' => __DIR__.'/getConsole_Command_XliffLintService.php',
            'console.command.yaml_lint' => __DIR__.'/getConsole_Command_YamlLintService.php',
            'console.command_loader' => __DIR__.'/getConsole_CommandLoaderService.php',
            'console.error_listener' => __DIR__.'/getConsole_ErrorListenerService.php',
            'debug.stopwatch' => __DIR__.'/getDebug_StopwatchService.php',
            'deprecated.form.registry' => __DIR__.'/getDeprecated_Form_RegistryService.php',
            'deprecated.form.registry.csrf' => __DIR__.'/getDeprecated_Form_Registry_CsrfService.php',
            'doctrine.cache_clear_metadata_command' => __DIR__.'/getDoctrine_CacheClearMetadataCommandService.php',
            'doctrine.cache_clear_query_cache_command' => __DIR__.'/getDoctrine_CacheClearQueryCacheCommandService.php',
            'doctrine.cache_clear_result_command' => __DIR__.'/getDoctrine_CacheClearResultCommandService.php',
            'doctrine.cache_collection_region_command' => __DIR__.'/getDoctrine_CacheCollectionRegionCommandService.php',
            'doctrine.clear_entity_region_command' => __DIR__.'/getDoctrine_ClearEntityRegionCommandService.php',
            'doctrine.clear_query_region_command' => __DIR__.'/getDoctrine_ClearQueryRegionCommandService.php',
            'doctrine.database_create_command' => __DIR__.'/getDoctrine_DatabaseCreateCommandService.php',
            'doctrine.database_drop_command' => __DIR__.'/getDoctrine_DatabaseDropCommandService.php',
            'doctrine.database_import_command' => __DIR__.'/getDoctrine_DatabaseImportCommandService.php',
            'doctrine.dbal.connection_factory' => __DIR__.'/getDoctrine_Dbal_ConnectionFactoryService.php',
            'doctrine.dbal.default_connection' => __DIR__.'/getDoctrine_Dbal_DefaultConnectionService.php',
            'doctrine.ensure_production_settings_command' => __DIR__.'/getDoctrine_EnsureProductionSettingsCommandService.php',
            'doctrine.generate_entities_command' => __DIR__.'/getDoctrine_GenerateEntitiesCommandService.php',
            'doctrine.mapping_convert_command' => __DIR__.'/getDoctrine_MappingConvertCommandService.php',
            'doctrine.mapping_import_command' => __DIR__.'/getDoctrine_MappingImportCommandService.php',
            'doctrine.mapping_info_command' => __DIR__.'/getDoctrine_MappingInfoCommandService.php',
            'doctrine.orm.default_entity_listener_resolver' => __DIR__.'/getDoctrine_Orm_DefaultEntityListenerResolverService.php',
            'doctrine.orm.default_entity_manager' => __DIR__.'/getDoctrine_Orm_DefaultEntityManagerService.php',
            'doctrine.orm.default_entity_manager.property_info_extractor' => __DIR__.'/getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php',
            'doctrine.orm.default_listeners.attach_entity_listeners' => __DIR__.'/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php',
            'doctrine.orm.default_manager_configurator' => __DIR__.'/getDoctrine_Orm_DefaultManagerConfiguratorService.php',
            'doctrine.orm.proxy_cache_warmer' => __DIR__.'/getDoctrine_Orm_ProxyCacheWarmerService.php',
            'doctrine.orm.validator.unique' => __DIR__.'/getDoctrine_Orm_Validator_UniqueService.php',
            'doctrine.orm.validator_initializer' => __DIR__.'/getDoctrine_Orm_ValidatorInitializerService.php',
            'doctrine.query_dql_command' => __DIR__.'/getDoctrine_QueryDqlCommandService.php',
            'doctrine.query_sql_command' => __DIR__.'/getDoctrine_QuerySqlCommandService.php',
            'doctrine.schema_create_command' => __DIR__.'/getDoctrine_SchemaCreateCommandService.php',
            'doctrine.schema_drop_command' => __DIR__.'/getDoctrine_SchemaDropCommandService.php',
            'doctrine.schema_update_command' => __DIR__.'/getDoctrine_SchemaUpdateCommandService.php',
            'doctrine.schema_validate_command' => __DIR__.'/getDoctrine_SchemaValidateCommandService.php',
            'doctrine_cache.contains_command' => __DIR__.'/getDoctrineCache_ContainsCommandService.php',
            'doctrine_cache.delete_command' => __DIR__.'/getDoctrineCache_DeleteCommandService.php',
            'doctrine_cache.flush_command' => __DIR__.'/getDoctrineCache_FlushCommandService.php',
            'doctrine_cache.providers.doctrine.orm.default_metadata_cache' => __DIR__.'/getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService.php',
            'doctrine_cache.providers.doctrine.orm.default_query_cache' => __DIR__.'/getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService.php',
            'doctrine_cache.providers.doctrine.orm.default_result_cache' => __DIR__.'/getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService.php',
            'doctrine_cache.stats_command' => __DIR__.'/getDoctrineCache_StatsCommandService.php',
            'file_locator' => __DIR__.'/getFileLocatorService.php',
            'filesystem' => __DIR__.'/getFilesystemService.php',
            'form.factory' => __DIR__.'/getForm_FactoryService.php',
            'form.registry' => __DIR__.'/getForm_RegistryService.php',
            'form.resolved_type_factory' => __DIR__.'/getForm_ResolvedTypeFactoryService.php',
            'form.server_params' => __DIR__.'/getForm_ServerParamsService.php',
            'form.type.birthday' => __DIR__.'/getForm_Type_BirthdayService.php',
            'form.type.button' => __DIR__.'/getForm_Type_ButtonService.php',
            'form.type.checkbox' => __DIR__.'/getForm_Type_CheckboxService.php',
            'form.type.choice' => __DIR__.'/getForm_Type_ChoiceService.php',
            'form.type.collection' => __DIR__.'/getForm_Type_CollectionService.php',
            'form.type.country' => __DIR__.'/getForm_Type_CountryService.php',
            'form.type.currency' => __DIR__.'/getForm_Type_CurrencyService.php',
            'form.type.date' => __DIR__.'/getForm_Type_DateService.php',
            'form.type.datetime' => __DIR__.'/getForm_Type_DatetimeService.php',
            'form.type.email' => __DIR__.'/getForm_Type_EmailService.php',
            'form.type.entity' => __DIR__.'/getForm_Type_EntityService.php',
            'form.type.file' => __DIR__.'/getForm_Type_FileService.php',
            'form.type.form' => __DIR__.'/getForm_Type_FormService.php',
            'form.type.hidden' => __DIR__.'/getForm_Type_HiddenService.php',
            'form.type.integer' => __DIR__.'/getForm_Type_IntegerService.php',
            'form.type.language' => __DIR__.'/getForm_Type_LanguageService.php',
            'form.type.locale' => __DIR__.'/getForm_Type_LocaleService.php',
            'form.type.money' => __DIR__.'/getForm_Type_MoneyService.php',
            'form.type.number' => __DIR__.'/getForm_Type_NumberService.php',
            'form.type.password' => __DIR__.'/getForm_Type_PasswordService.php',
            'form.type.percent' => __DIR__.'/getForm_Type_PercentService.php',
            'form.type.radio' => __DIR__.'/getForm_Type_RadioService.php',
            'form.type.range' => __DIR__.'/getForm_Type_RangeService.php',
            'form.type.repeated' => __DIR__.'/getForm_Type_RepeatedService.php',
            'form.type.reset' => __DIR__.'/getForm_Type_ResetService.php',
            'form.type.search' => __DIR__.'/getForm_Type_SearchService.php',
            'form.type.submit' => __DIR__.'/getForm_Type_SubmitService.php',
            'form.type.text' => __DIR__.'/getForm_Type_TextService.php',
            'form.type.textarea' => __DIR__.'/getForm_Type_TextareaService.php',
            'form.type.time' => __DIR__.'/getForm_Type_TimeService.php',
            'form.type.timezone' => __DIR__.'/getForm_Type_TimezoneService.php',
            'form.type.url' => __DIR__.'/getForm_Type_UrlService.php',
            'form.type_extension.csrf' => __DIR__.'/getForm_TypeExtension_CsrfService.php',
            'form.type_extension.form.http_foundation' => __DIR__.'/getForm_TypeExtension_Form_HttpFoundationService.php',
            'form.type_extension.form.validator' => __DIR__.'/getForm_TypeExtension_Form_ValidatorService.php',
            'form.type_extension.repeated.validator' => __DIR__.'/getForm_TypeExtension_Repeated_ValidatorService.php',
            'form.type_extension.submit.validator' => __DIR__.'/getForm_TypeExtension_Submit_ValidatorService.php',
            'form.type_extension.upload.validator' => __DIR__.'/getForm_TypeExtension_Upload_ValidatorService.php',
            'form.type_guesser.doctrine' => __DIR__.'/getForm_TypeGuesser_DoctrineService.php',
            'form.type_guesser.validator' => __DIR__.'/getForm_TypeGuesser_ValidatorService.php',
            'fos_rest.decoder.json' => __DIR__.'/getFosRest_Decoder_JsonService.php',
            'fos_rest.decoder.jsontoform' => __DIR__.'/getFosRest_Decoder_JsontoformService.php',
            'fos_rest.decoder.xml' => __DIR__.'/getFosRest_Decoder_XmlService.php',
            'fos_rest.inflector' => __DIR__.'/getFosRest_InflectorService.php',
            'fos_rest.normalizer.camel_keys' => __DIR__.'/getFosRest_Normalizer_CamelKeysService.php',
            'fos_rest.normalizer.camel_keys_with_leading_underscore' => __DIR__.'/getFosRest_Normalizer_CamelKeysWithLeadingUnderscoreService.php',
            'fos_rest.request.param_fetcher' => __DIR__.'/getFosRest_Request_ParamFetcherService.php',
            'fos_rest.request.param_fetcher.reader' => __DIR__.'/getFosRest_Request_ParamFetcher_ReaderService.php',
            'fos_rest.serializer' => __DIR__.'/getFosRest_SerializerService.php',
            'fos_rest.view_response_listener' => __DIR__.'/getFosRest_ViewResponseListenerService.php',
            'fragment.handler' => __DIR__.'/getFragment_HandlerService.php',
            'fragment.renderer.hinclude' => __DIR__.'/getFragment_Renderer_HincludeService.php',
            'fragment.renderer.inline' => __DIR__.'/getFragment_Renderer_InlineService.php',
            'kernel.class_cache.cache_warmer' => __DIR__.'/getKernel_ClassCache_CacheWarmerService.php',
            'logger' => __DIR__.'/getLoggerService.php',
            'monolog.activation_strategy.not_found' => __DIR__.'/getMonolog_ActivationStrategy_NotFoundService.php',
            'monolog.handler.fingers_crossed.error_level_activation_strategy' => __DIR__.'/getMonolog_Handler_FingersCrossed_ErrorLevelActivationStrategyService.php',
            'monolog.handler.null_internal' => __DIR__.'/getMonolog_Handler_NullInternalService.php',
            'monolog.logger.cache' => __DIR__.'/getMonolog_Logger_CacheService.php',
            'monolog.logger.console' => __DIR__.'/getMonolog_Logger_ConsoleService.php',
            'monolog.logger.doctrine' => __DIR__.'/getMonolog_Logger_DoctrineService.php',
            'monolog.logger.php' => __DIR__.'/getMonolog_Logger_PhpService.php',
            'monolog.logger.security' => __DIR__.'/getMonolog_Logger_SecurityService.php',
            'nelmio_api_doc.controller.swagger' => __DIR__.'/getNelmioApiDoc_Controller_SwaggerService.php',
            'nelmio_api_doc.controller.swagger_ui' => __DIR__.'/getNelmioApiDoc_Controller_SwaggerUiService.php',
            'nelmio_api_doc.controller_reflector' => __DIR__.'/getNelmioApiDoc_ControllerReflectorService.php',
            'nelmio_api_doc.describers.config' => __DIR__.'/getNelmioApiDoc_Describers_ConfigService.php',
            'nelmio_api_doc.describers.default' => __DIR__.'/getNelmioApiDoc_Describers_DefaultService.php',
            'nelmio_api_doc.describers.route.default' => __DIR__.'/getNelmioApiDoc_Describers_Route_DefaultService.php',
            'nelmio_api_doc.describers.swagger_php.default' => __DIR__.'/getNelmioApiDoc_Describers_SwaggerPhp_DefaultService.php',
            'nelmio_api_doc.generator' => __DIR__.'/getNelmioApiDoc_GeneratorService.php',
            'nelmio_api_doc.generator_locator' => __DIR__.'/getNelmioApiDoc_GeneratorLocatorService.php',
            'nelmio_api_doc.model_describers.form' => __DIR__.'/getNelmioApiDoc_ModelDescribers_FormService.php',
            'nelmio_api_doc.model_describers.object' => __DIR__.'/getNelmioApiDoc_ModelDescribers_ObjectService.php',
            'nelmio_api_doc.route_describers.fos_rest' => __DIR__.'/getNelmioApiDoc_RouteDescribers_FosRestService.php',
            'nelmio_api_doc.route_describers.php_doc' => __DIR__.'/getNelmioApiDoc_RouteDescribers_PhpDocService.php',
            'nelmio_api_doc.route_describers.route_metadata' => __DIR__.'/getNelmioApiDoc_RouteDescribers_RouteMetadataService.php',
            'nelmio_api_doc.routes.default' => __DIR__.'/getNelmioApiDoc_Routes_DefaultService.php',
            'property_accessor' => __DIR__.'/getPropertyAccessorService.php',
            'property_info' => __DIR__.'/getPropertyInfoService.php',
            'property_info.php_doc_extractor' => __DIR__.'/getPropertyInfo_PhpDocExtractorService.php',
            'property_info.reflection_extractor' => __DIR__.'/getPropertyInfo_ReflectionExtractorService.php',
            'property_info.serializer_extractor' => __DIR__.'/getPropertyInfo_SerializerExtractorService.php',
            'router.cache_warmer' => __DIR__.'/getRouter_CacheWarmerService.php',
            'routing.loader' => __DIR__.'/getRouting_LoaderService.php',
            'security.access.authenticated_voter' => __DIR__.'/getSecurity_Access_AuthenticatedVoterService.php',
            'security.access.expression_voter' => __DIR__.'/getSecurity_Access_ExpressionVoterService.php',
            'security.access.simple_role_voter' => __DIR__.'/getSecurity_Access_SimpleRoleVoterService.php',
            'security.access_listener' => __DIR__.'/getSecurity_AccessListenerService.php',
            'security.access_map' => __DIR__.'/getSecurity_AccessMapService.php',
            'security.authentication.guard_handler' => __DIR__.'/getSecurity_Authentication_GuardHandlerService.php',
            'security.authentication.listener.anonymous.main' => __DIR__.'/getSecurity_Authentication_Listener_Anonymous_MainService.php',
            'security.authentication.provider.anonymous.main' => __DIR__.'/getSecurity_Authentication_Provider_Anonymous_MainService.php',
            'security.authentication_utils' => __DIR__.'/getSecurity_AuthenticationUtilsService.php',
            'security.channel_listener' => __DIR__.'/getSecurity_ChannelListenerService.php',
            'security.command.user_password_encoder' => __DIR__.'/getSecurity_Command_UserPasswordEncoderService.php',
            'security.context_listener.0' => __DIR__.'/getSecurity_ContextListener_0Service.php',
            'security.csrf.token_manager' => __DIR__.'/getSecurity_Csrf_TokenManagerService.php',
            'security.encoder_factory' => __DIR__.'/getSecurity_EncoderFactoryService.php',
            'security.firewall.map.context.dev' => __DIR__.'/getSecurity_Firewall_Map_Context_DevService.php',
            'security.firewall.map.context.main' => __DIR__.'/getSecurity_Firewall_Map_Context_MainService.php',
            'security.password_encoder' => __DIR__.'/getSecurity_PasswordEncoderService.php',
            'security.request_matcher.zfhj2lw' => __DIR__.'/getSecurity_RequestMatcher_Zfhj2lwService.php',
            'security.user.provider.concrete.in_memory' => __DIR__.'/getSecurity_User_Provider_Concrete_InMemoryService.php',
            'security.user_value_resolver' => __DIR__.'/getSecurity_UserValueResolverService.php',
            'security.validator.user_password' => __DIR__.'/getSecurity_Validator_UserPasswordService.php',
            'sensio_framework_extra.view.guesser' => __DIR__.'/getSensioFrameworkExtra_View_GuesserService.php',
            'serializer' => __DIR__.'/getSerializerService.php',
            'serializer.mapping.cache.symfony' => __DIR__.'/getSerializer_Mapping_Cache_SymfonyService.php',
            'serializer.mapping.cache_class_metadata_factory' => __DIR__.'/getSerializer_Mapping_CacheClassMetadataFactoryService.php',
            'serializer.mapping.cache_warmer' => __DIR__.'/getSerializer_Mapping_CacheWarmerService.php',
            'service_locator.sr6ctxe' => __DIR__.'/getServiceLocator_Sr6ctxeService.php',
            'services_resetter' => __DIR__.'/getServicesResetterService.php',
            'session' => __DIR__.'/getSessionService.php',
            'session.handler' => __DIR__.'/getSession_HandlerService.php',
            'session.storage.filesystem' => __DIR__.'/getSession_Storage_FilesystemService.php',
            'session.storage.metadata_bag' => __DIR__.'/getSession_Storage_MetadataBagService.php',
            'session.storage.native' => __DIR__.'/getSession_Storage_NativeService.php',
            'session.storage.php_bridge' => __DIR__.'/getSession_Storage_PhpBridgeService.php',
            'swiftmailer.email_sender.listener' => __DIR__.'/getSwiftmailer_EmailSender_ListenerService.php',
            'swiftmailer.mailer.default' => __DIR__.'/getSwiftmailer_Mailer_DefaultService.php',
            'swiftmailer.mailer.default.spool' => __DIR__.'/getSwiftmailer_Mailer_Default_SpoolService.php',
            'swiftmailer.mailer.default.transport' => __DIR__.'/getSwiftmailer_Mailer_Default_TransportService.php',
            'swiftmailer.mailer.default.transport.eventdispatcher' => __DIR__.'/getSwiftmailer_Mailer_Default_Transport_EventdispatcherService.php',
            'swiftmailer.mailer.default.transport.real' => __DIR__.'/getSwiftmailer_Mailer_Default_Transport_RealService.php',
            'templating' => __DIR__.'/getTemplatingService.php',
            'templating.cache_warmer.template_paths' => __DIR__.'/getTemplating_CacheWarmer_TemplatePathsService.php',
            'templating.filename_parser' => __DIR__.'/getTemplating_FilenameParserService.php',
            'templating.finder' => __DIR__.'/getTemplating_FinderService.php',
            'templating.helper.logout_url' => __DIR__.'/getTemplating_Helper_LogoutUrlService.php',
            'templating.helper.security' => __DIR__.'/getTemplating_Helper_SecurityService.php',
            'templating.loader' => __DIR__.'/getTemplating_LoaderService.php',
            'templating.locator' => __DIR__.'/getTemplating_LocatorService.php',
            'templating.name_parser' => __DIR__.'/getTemplating_NameParserService.php',
            'translator' => __DIR__.'/getTranslatorService.php',
            'twig' => __DIR__.'/getTwigService.php',
            'twig.cache_warmer' => __DIR__.'/getTwig_CacheWarmerService.php',
            'twig.command.debug' => __DIR__.'/getTwig_Command_DebugService.php',
            'twig.command.lint' => __DIR__.'/getTwig_Command_LintService.php',
            'twig.controller.exception' => __DIR__.'/getTwig_Controller_ExceptionService.php',
            'twig.controller.preview_error' => __DIR__.'/getTwig_Controller_PreviewErrorService.php',
            'twig.exception_listener' => __DIR__.'/getTwig_ExceptionListenerService.php',
            'twig.form.renderer' => __DIR__.'/getTwig_Form_RendererService.php',
            'twig.loader' => __DIR__.'/getTwig_LoaderService.php',
            'twig.profile' => __DIR__.'/getTwig_ProfileService.php',
            'twig.runtime.httpkernel' => __DIR__.'/getTwig_Runtime_HttpkernelService.php',
            'twig.template_cache_warmer' => __DIR__.'/getTwig_TemplateCacheWarmerService.php',
            'twig.translation.extractor' => __DIR__.'/getTwig_Translation_ExtractorService.php',
            'validator' => __DIR__.'/getValidatorService.php',
            'validator.builder' => __DIR__.'/getValidator_BuilderService.php',
            'validator.email' => __DIR__.'/getValidator_EmailService.php',
            'validator.expression' => __DIR__.'/getValidator_ExpressionService.php',
            'validator.mapping.cache_warmer' => __DIR__.'/getValidator_Mapping_CacheWarmerService.php',
        );
        $this->privates = array(
            'FOS\\RestBundle\\Request\\ParamFetcherInterface' => true,
            'doctrine.orm.default_metadata_cache' => true,
            'doctrine.orm.default_query_cache' => true,
            'doctrine.orm.default_result_cache' => true,
            'fos_rest.router' => true,
            'fos_rest.templating' => true,
            'fos_rest.view_handler' => true,
            'session.storage' => true,
            'swiftmailer.mailer' => true,
            'swiftmailer.spool' => true,
            'swiftmailer.transport' => true,
            'swiftmailer.transport.real' => true,
            'FOS\\RestBundle\\View\\ViewHandlerInterface' => true,
            'annotation_reader' => true,
            'annotations.cache' => true,
            'annotations.cache_warmer' => true,
            'annotations.reader' => true,
            'argument_resolver.default' => true,
            'argument_resolver.request' => true,
            'argument_resolver.request_attribute' => true,
            'argument_resolver.service' => true,
            'argument_resolver.session' => true,
            'argument_resolver.variadic' => true,
            'assets.context' => true,
            'assets.packages' => true,
            'cache.annotations' => true,
            'cache.default_clearer' => true,
            'cache.property_access' => true,
            'cache.serializer' => true,
            'cache.validator' => true,
            'config_cache_factory' => true,
            'console.command.about' => true,
            'console.command.assets_install' => true,
            'console.command.cache_clear' => true,
            'console.command.cache_pool_clear' => true,
            'console.command.cache_pool_prune' => true,
            'console.command.cache_warmup' => true,
            'console.command.config_debug' => true,
            'console.command.config_dump_reference' => true,
            'console.command.container_debug' => true,
            'console.command.debug_autowiring' => true,
            'console.command.event_dispatcher_debug' => true,
            'console.command.form_debug' => true,
            'console.command.router_debug' => true,
            'console.command.router_match' => true,
            'console.command.xliff_lint' => true,
            'console.command.yaml_lint' => true,
            'console.error_listener' => true,
            'controller_name_converter' => true,
            'debug.debug_handlers_listener' => true,
            'debug.file_link_formatter' => true,
            'debug.stopwatch' => true,
            'deprecated.form.registry' => true,
            'deprecated.form.registry.csrf' => true,
            'doctrine.cache_clear_metadata_command' => true,
            'doctrine.cache_clear_query_cache_command' => true,
            'doctrine.cache_clear_result_command' => true,
            'doctrine.cache_collection_region_command' => true,
            'doctrine.clear_entity_region_command' => true,
            'doctrine.clear_query_region_command' => true,
            'doctrine.database_create_command' => true,
            'doctrine.database_drop_command' => true,
            'doctrine.database_import_command' => true,
            'doctrine.dbal.connection_factory' => true,
            'doctrine.ensure_production_settings_command' => true,
            'doctrine.generate_entities_command' => true,
            'doctrine.mapping_convert_command' => true,
            'doctrine.mapping_import_command' => true,
            'doctrine.mapping_info_command' => true,
            'doctrine.orm.default_entity_listener_resolver' => true,
            'doctrine.orm.default_entity_manager.property_info_extractor' => true,
            'doctrine.orm.default_listeners.attach_entity_listeners' => true,
            'doctrine.orm.default_manager_configurator' => true,
            'doctrine.orm.proxy_cache_warmer' => true,
            'doctrine.orm.validator.unique' => true,
            'doctrine.orm.validator_initializer' => true,
            'doctrine.query_dql_command' => true,
            'doctrine.query_sql_command' => true,
            'doctrine.schema_create_command' => true,
            'doctrine.schema_drop_command' => true,
            'doctrine.schema_update_command' => true,
            'doctrine.schema_validate_command' => true,
            'doctrine_cache.contains_command' => true,
            'doctrine_cache.delete_command' => true,
            'doctrine_cache.flush_command' => true,
            'doctrine_cache.providers.doctrine.orm.default_metadata_cache' => true,
            'doctrine_cache.providers.doctrine.orm.default_query_cache' => true,
            'doctrine_cache.providers.doctrine.orm.default_result_cache' => true,
            'doctrine_cache.stats_command' => true,
            'file_locator' => true,
            'form.registry' => true,
            'form.resolved_type_factory' => true,
            'form.server_params' => true,
            'form.type.choice' => true,
            'form.type.entity' => true,
            'form.type.form' => true,
            'form.type_extension.csrf' => true,
            'form.type_extension.form.http_foundation' => true,
            'form.type_extension.form.validator' => true,
            'form.type_extension.repeated.validator' => true,
            'form.type_extension.submit.validator' => true,
            'form.type_extension.upload.validator' => true,
            'form.type_guesser.doctrine' => true,
            'form.type_guesser.validator' => true,
            'fos_rest.body_listener' => true,
            'fos_rest.decoder.json' => true,
            'fos_rest.decoder.jsontoform' => true,
            'fos_rest.decoder.xml' => true,
            'fos_rest.decoder_provider' => true,
            'fos_rest.format_listener' => true,
            'fos_rest.format_negotiator' => true,
            'fos_rest.inflector' => true,
            'fos_rest.normalizer.camel_keys' => true,
            'fos_rest.normalizer.camel_keys_with_leading_underscore' => true,
            'fos_rest.request.param_fetcher' => true,
            'fos_rest.request.param_fetcher.reader' => true,
            'fos_rest.serializer' => true,
            'fos_rest.view_response_listener' => true,
            'fragment.handler' => true,
            'fragment.listener' => true,
            'fragment.renderer.hinclude' => true,
            'fragment.renderer.inline' => true,
            'kernel.class_cache.cache_warmer' => true,
            'locale_listener' => true,
            'logger' => true,
            'monolog.activation_strategy.not_found' => true,
            'monolog.handler.console' => true,
            'monolog.handler.fingers_crossed.error_level_activation_strategy' => true,
            'monolog.handler.main' => true,
            'monolog.handler.nested' => true,
            'monolog.handler.null_internal' => true,
            'monolog.logger.cache' => true,
            'monolog.logger.console' => true,
            'monolog.logger.doctrine' => true,
            'monolog.logger.php' => true,
            'monolog.logger.request' => true,
            'monolog.logger.security' => true,
            'monolog.processor.psr_log_message' => true,
            'nelmio_api_doc.controller_reflector' => true,
            'nelmio_api_doc.describers.config' => true,
            'nelmio_api_doc.describers.default' => true,
            'nelmio_api_doc.describers.route.default' => true,
            'nelmio_api_doc.describers.swagger_php.default' => true,
            'nelmio_api_doc.generator_locator' => true,
            'nelmio_api_doc.model_describers.form' => true,
            'nelmio_api_doc.model_describers.object' => true,
            'nelmio_api_doc.route_describers.fos_rest' => true,
            'nelmio_api_doc.route_describers.php_doc' => true,
            'nelmio_api_doc.route_describers.route_metadata' => true,
            'nelmio_api_doc.routes.default' => true,
            'property_accessor' => true,
            'property_info' => true,
            'property_info.php_doc_extractor' => true,
            'property_info.reflection_extractor' => true,
            'property_info.serializer_extractor' => true,
            'resolve_controller_name_subscriber' => true,
            'response_listener' => true,
            'router.cache_warmer' => true,
            'router.request_context' => true,
            'router_listener' => true,
            'security.access.authenticated_voter' => true,
            'security.access.decision_manager' => true,
            'security.access.expression_voter' => true,
            'security.access.simple_role_voter' => true,
            'security.access_listener' => true,
            'security.access_map' => true,
            'security.authentication.guard_handler' => true,
            'security.authentication.listener.anonymous.main' => true,
            'security.authentication.manager' => true,
            'security.authentication.provider.anonymous.main' => true,
            'security.authentication.trust_resolver' => true,
            'security.channel_listener' => true,
            'security.command.user_password_encoder' => true,
            'security.context_listener.0' => true,
            'security.encoder_factory' => true,
            'security.firewall' => true,
            'security.firewall.map.context.dev' => true,
            'security.firewall.map.context.main' => true,
            'security.logout_url_generator' => true,
            'security.rememberme.response_listener' => true,
            'security.request_matcher.zfhj2lw' => true,
            'security.role_hierarchy' => true,
            'security.user.provider.concrete.in_memory' => true,
            'security.user_value_resolver' => true,
            'security.validator.user_password' => true,
            'sensio_framework_extra.cache.listener' => true,
            'sensio_framework_extra.controller.listener' => true,
            'sensio_framework_extra.converter.datetime' => true,
            'sensio_framework_extra.converter.doctrine.orm' => true,
            'sensio_framework_extra.converter.listener' => true,
            'sensio_framework_extra.converter.manager' => true,
            'sensio_framework_extra.security.listener' => true,
            'sensio_framework_extra.view.listener' => true,
            'serializer.mapping.cache.symfony' => true,
            'serializer.mapping.cache_class_metadata_factory' => true,
            'serializer.mapping.cache_warmer' => true,
            'service_locator.sr6ctxe' => true,
            'session.handler' => true,
            'session.save_listener' => true,
            'session.storage.filesystem' => true,
            'session.storage.metadata_bag' => true,
            'session.storage.native' => true,
            'session.storage.php_bridge' => true,
            'session_listener' => true,
            'streamed_response_listener' => true,
            'swiftmailer.email_sender.listener' => true,
            'swiftmailer.mailer.default.spool' => true,
            'swiftmailer.mailer.default.transport' => true,
            'swiftmailer.mailer.default.transport.eventdispatcher' => true,
            'templating.cache_warmer.template_paths' => true,
            'templating.filename_parser' => true,
            'templating.finder' => true,
            'templating.helper.logout_url' => true,
            'templating.helper.security' => true,
            'templating.locator' => true,
            'templating.name_parser' => true,
            'twig.cache_warmer' => true,
            'twig.command.debug' => true,
            'twig.command.lint' => true,
            'twig.exception_listener' => true,
            'twig.form.renderer' => true,
            'twig.loader' => true,
            'twig.profile' => true,
            'twig.runtime.httpkernel' => true,
            'twig.template_cache_warmer' => true,
            'twig.translation.extractor' => true,
            'uri_signer' => true,
            'validate_request_listener' => true,
            'validator.builder' => true,
            'validator.email' => true,
            'validator.expression' => true,
            'validator.mapping.cache_warmer' => true,
        );
        $this->aliases = array(
            'FOS\\RestBundle\\Request\\ParamFetcherInterface' => 'fos_rest.request.param_fetcher',
            'cache.app_clearer' => 'cache.default_clearer',
            'console.command.doctrine_bundle_doctrinecachebundle_command_containscommand' => 'doctrine_cache.contains_command',
            'console.command.doctrine_bundle_doctrinecachebundle_command_deletecommand' => 'doctrine_cache.delete_command',
            'console.command.doctrine_bundle_doctrinecachebundle_command_flushcommand' => 'doctrine_cache.flush_command',
            'console.command.doctrine_bundle_doctrinecachebundle_command_statscommand' => 'doctrine_cache.stats_command',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.default_metadata_cache' => 'doctrine_cache.providers.doctrine.orm.default_metadata_cache',
            'doctrine.orm.default_query_cache' => 'doctrine_cache.providers.doctrine.orm.default_query_cache',
            'doctrine.orm.default_result_cache' => 'doctrine_cache.providers.doctrine.orm.default_result_cache',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'fos_rest.router' => 'router',
            'fos_rest.templating' => 'templating',
            'fos_rest.view_handler' => 'FOS\\RestBundle\\View\\ViewHandlerInterface',
            'mailer' => 'swiftmailer.mailer.default',
            'session.storage' => 'session.storage.native',
            'swiftmailer.mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.spool' => 'swiftmailer.mailer.default.spool',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
            'swiftmailer.transport.real' => 'swiftmailer.mailer.default.transport.real',
        );
    }

    public function getRemovedIds()
    {
        return require __DIR__.'/removed-ids.php';
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function isFrozen()
    {
        @trigger_error(sprintf('The %s() method is deprecated since Symfony 3.3 and will be removed in 4.0. Use the isCompiled() method instead.', __METHOD__), E_USER_DEPRECATED);

        return true;
    }

    protected function load($file, $lazyLoad = true)
    {
        return require $file;
    }

    /*
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default');
    }

    /*
     * Gets the public 'event_dispatcher' shared service.
     *
     * @return \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher
     */
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this);

        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['fos_rest.body_listener']) ? $this->services['fos_rest.body_listener'] : $this->getFosRest_BodyListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 10);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['fos_rest.format_listener']) ? $this->services['fos_rest.format_listener'] : $this->getFosRest_FormatListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 34);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['response_listener']) ? $this->services['response_listener'] : $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['streamed_response_listener']) ? $this->services['streamed_response_listener'] : $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -1024);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['locale_listener']) ? $this->services['locale_listener'] : $this->getLocaleListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 16);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['locale_listener']) ? $this->services['locale_listener'] : $this->getLocaleListenerService()) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['validate_request_listener']) ? $this->services['validate_request_listener'] : $this->services['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 256);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['resolve_controller_name_subscriber']) ? $this->services['resolve_controller_name_subscriber'] : $this->getResolveControllerNameSubscriberService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 24);
        $instance->addListener('console.error', array(0 => function () {
            return ${($_ = isset($this->services['console.error_listener']) ? $this->services['console.error_listener'] : $this->load(__DIR__.'/getConsole_ErrorListenerService.php')) && false ?: '_'};
        }, 1 => 'onConsoleError'), -128);
        $instance->addListener('console.terminate', array(0 => function () {
            return ${($_ = isset($this->services['console.error_listener']) ? $this->services['console.error_listener'] : $this->load(__DIR__.'/getConsole_ErrorListenerService.php')) && false ?: '_'};
        }, 1 => 'onConsoleTerminate'), -128);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['session_listener']) ? $this->services['session_listener'] : $this->getSessionListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 128);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['session_listener']) ? $this->services['session_listener'] : $this->getSessionListenerService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -1000);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['session.save_listener']) ? $this->services['session.save_listener'] : $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -1000);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['fragment.listener']) ? $this->services['fragment.listener'] : $this->getFragment_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 48);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['debug.debug_handlers_listener']) ? $this->services['debug.debug_handlers_listener'] : $this->getDebug_DebugHandlersListenerService()) && false ?: '_'};
        }, 1 => 'configure'), 2048);
        $instance->addListener('console.command', array(0 => function () {
            return ${($_ = isset($this->services['debug.debug_handlers_listener']) ? $this->services['debug.debug_handlers_listener'] : $this->getDebug_DebugHandlersListenerService()) && false ?: '_'};
        }, 1 => 'configure'), 2048);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['router_listener']) ? $this->services['router_listener'] : $this->getRouterListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 32);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['router_listener']) ? $this->services['router_listener'] : $this->getRouterListenerService()) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['security.firewall']) ? $this->services['security.firewall'] : $this->getSecurity_FirewallService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 8);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['security.firewall']) ? $this->services['security.firewall'] : $this->getSecurity_FirewallService()) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['security.rememberme.response_listener']) ? $this->services['security.rememberme.response_listener'] : $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['twig.exception_listener']) ? $this->services['twig.exception_listener'] : $this->load(__DIR__.'/getTwig_ExceptionListenerService.php')) && false ?: '_'};
        }, 1 => 'onKernelException'), -128);
        $instance->addListener('console.command', array(0 => function () {
            return ${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->getMonolog_Handler_ConsoleService()) && false ?: '_'};
        }, 1 => 'onCommand'), 255);
        $instance->addListener('console.terminate', array(0 => function () {
            return ${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->getMonolog_Handler_ConsoleService()) && false ?: '_'};
        }, 1 => 'onTerminate'), -255);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->load(__DIR__.'/getSwiftmailer_EmailSender_ListenerService.php')) && false ?: '_'};
        }, 1 => 'onException'), 0);
        $instance->addListener('kernel.terminate', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->load(__DIR__.'/getSwiftmailer_EmailSender_ListenerService.php')) && false ?: '_'};
        }, 1 => 'onTerminate'), 0);
        $instance->addListener('console.error', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->load(__DIR__.'/getSwiftmailer_EmailSender_ListenerService.php')) && false ?: '_'};
        }, 1 => 'onException'), 0);
        $instance->addListener('console.terminate', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->load(__DIR__.'/getSwiftmailer_EmailSender_ListenerService.php')) && false ?: '_'};
        }, 1 => 'onTerminate'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.controller.listener']) ? $this->services['sensio_framework_extra.controller.listener'] : $this->getSensioFrameworkExtra_Controller_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.converter.listener']) ? $this->services['sensio_framework_extra.converter.listener'] : $this->getSensioFrameworkExtra_Converter_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.view.listener']) ? $this->services['sensio_framework_extra.view.listener'] : $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener($this)) && false ?: '_'};
        }, 1 => 'onKernelController'), -128);
        $instance->addListener('kernel.view', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.view.listener']) ? $this->services['sensio_framework_extra.view.listener'] : $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener($this)) && false ?: '_'};
        }, 1 => 'onKernelView'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.cache.listener']) ? $this->services['sensio_framework_extra.cache.listener'] : $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.cache.listener']) ? $this->services['sensio_framework_extra.cache.listener'] : $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.security.listener']) ? $this->services['sensio_framework_extra.security.listener'] : $this->getSensioFrameworkExtra_Security_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.view', array(0 => function () {
            return ${($_ = isset($this->services['fos_rest.view_response_listener']) ? $this->services['fos_rest.view_response_listener'] : $this->load(__DIR__.'/getFosRest_ViewResponseListenerService.php')) && false ?: '_'};
        }, 1 => 'onKernelView'), 30);

        return $instance;
    }

    /*
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'}, new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'})) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.request']) ? $this->services['monolog.logger.request'] : $this->getMonolog_Logger_RequestService()) && false ?: '_'}), ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory(), new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['argument_resolver.request_attribute']) ? $this->services['argument_resolver.request_attribute'] : $this->services['argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver()) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['argument_resolver.request']) ? $this->services['argument_resolver.request'] : $this->services['argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver()) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['argument_resolver.session']) ? $this->services['argument_resolver.session'] : $this->services['argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver()) && false ?: '_'};
            yield 3 => ${($_ = isset($this->services['security.user_value_resolver']) ? $this->services['security.user_value_resolver'] : $this->load(__DIR__.'/getSecurity_UserValueResolverService.php')) && false ?: '_'};
            yield 4 => ${($_ = isset($this->services['argument_resolver.service']) ? $this->services['argument_resolver.service'] : $this->load(__DIR__.'/getArgumentResolver_ServiceService.php')) && false ?: '_'};
            yield 5 => ${($_ = isset($this->services['argument_resolver.default']) ? $this->services['argument_resolver.default'] : $this->services['argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver()) && false ?: '_'};
            yield 6 => ${($_ = isset($this->services['argument_resolver.variadic']) ? $this->services['argument_resolver.variadic'] : $this->services['argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver()) && false ?: '_'};
        }, 7)));
    }

    /*
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /*
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, ($this->targetDirs[3].'/app/config/routing.yml'), array('cache_dir' => $this->targetDirs[0], 'debug' => false, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appProdProjectContainerUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appProdProjectContainerUrlMatcher', 'strict_requirements' => NULL), ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'});

        $instance->setConfigCacheFactory(${($_ = isset($this->services['config_cache_factory']) ? $this->services['config_cache_factory'] : $this->services['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['security.access.decision_manager']) ? $this->services['security.access.decision_manager'] : $this->getSecurity_Access_DecisionManagerService()) && false ?: '_'}, false);
    }

    /*
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /*
     * Gets the private 'annotation_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader
     */
    protected function getAnnotationReaderService()
    {
        $this->services['annotation_reader'] = $instance = new \Doctrine\Common\Annotations\CachedReader(${($_ = isset($this->services['annotations.reader']) ? $this->services['annotations.reader'] : $this->getAnnotations_ReaderService()) && false ?: '_'}, new \Doctrine\Common\Cache\ArrayCache(), false);

        $instance->cacheProviderBackup = function () {
            return ${($_ = isset($this->services['annotations.cache']) ? $this->services['annotations.cache'] : $this->load(__DIR__.'/getAnnotations_CacheService.php')) && false ?: '_'};
        };

        return $instance;
    }

    /*
     * Gets the private 'annotations.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotations_ReaderService()
    {
        $this->services['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $a = new \Doctrine\Common\Annotations\AnnotationRegistry();
        $a->registerLoader('class_exists');

        $instance->addGlobalIgnoredName('required', $a);

        return $instance;
    }

    /*
     * Gets the private 'config_cache_factory' shared service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->services['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory();
    }

    /*
     * Gets the private 'controller_name_converter' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser
     */
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'});
    }

    /*
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->services['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, NULL, -1, 0, false, ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->services['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL)) && false ?: '_'}, false);
    }

    /*
     * Gets the private 'debug.file_link_formatter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\FileLinkFormatter
     */
    protected function getDebug_FileLinkFormatterService()
    {
        return $this->services['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL);
    }

    /*
     * Gets the private 'fos_rest.body_listener' shared service.
     *
     * @return \FOS\RestBundle\EventListener\BodyListener
     */
    protected function getFosRest_BodyListenerService()
    {
        $this->services['fos_rest.body_listener'] = $instance = new \FOS\RestBundle\EventListener\BodyListener(${($_ = isset($this->services['fos_rest.decoder_provider']) ? $this->services['fos_rest.decoder_provider'] : $this->getFosRest_DecoderProviderService()) && false ?: '_'}, false);

        $instance->setDefaultFormat(NULL);

        return $instance;
    }

    /*
     * Gets the private 'fos_rest.decoder_provider' shared service.
     *
     * @return \FOS\RestBundle\Decoder\ContainerDecoderProvider
     */
    protected function getFosRest_DecoderProviderService()
    {
        return $this->services['fos_rest.decoder_provider'] = new \FOS\RestBundle\Decoder\ContainerDecoderProvider(new \Symfony\Component\DependencyInjection\ServiceLocator(array('fos_rest.decoder.json' => function () {
            return ${($_ = isset($this->services['fos_rest.decoder.json']) ? $this->services['fos_rest.decoder.json'] : $this->services['fos_rest.decoder.json'] = new \FOS\RestBundle\Decoder\JsonDecoder()) && false ?: '_'};
        }, 'fos_rest.decoder.xml' => function () {
            return ${($_ = isset($this->services['fos_rest.decoder.xml']) ? $this->services['fos_rest.decoder.xml'] : $this->services['fos_rest.decoder.xml'] = new \FOS\RestBundle\Decoder\XmlDecoder()) && false ?: '_'};
        })), array('json' => 'fos_rest.decoder.json', 'xml' => 'fos_rest.decoder.xml'));
    }

    /*
     * Gets the private 'fos_rest.format_listener' shared service.
     *
     * @return \FOS\RestBundle\EventListener\FormatListener
     */
    protected function getFosRest_FormatListenerService()
    {
        return $this->services['fos_rest.format_listener'] = new \FOS\RestBundle\EventListener\FormatListener(${($_ = isset($this->services['fos_rest.format_negotiator']) ? $this->services['fos_rest.format_negotiator'] : $this->getFosRest_FormatNegotiatorService()) && false ?: '_'});
    }

    /*
     * Gets the private 'fos_rest.format_negotiator' shared service.
     *
     * @return \FOS\RestBundle\Negotiation\FormatNegotiator
     */
    protected function getFosRest_FormatNegotiatorService()
    {
        $this->services['fos_rest.format_negotiator'] = $instance = new \FOS\RestBundle\Negotiation\FormatNegotiator(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'});

        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/', NULL, NULL, NULL, array()), array('priorities' => array(0 => 'json'), 'fallback_format' => 'json', 'methods' => NULL, 'attributes' => array(), 'stop' => false, 'prefer_extension' => '2.0'));

        return $instance;
    }

    /*
     * Gets the private 'fragment.listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\FragmentListener
     */
    protected function getFragment_ListenerService()
    {
        return $this->services['fragment.listener'] = new \Symfony\Component\HttpKernel\EventListener\FragmentListener(${($_ = isset($this->services['uri_signer']) ? $this->services['uri_signer'] : $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('da9b5df28a92a13823dec70cd91b331cd4557ad8')) && false ?: '_'}, '/_fragment');
    }

    /*
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, 'en', ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'});
    }

    /*
     * Gets the private 'monolog.handler.console' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        $this->services['monolog.handler.console'] = $instance = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array());

        $instance->pushProcessor(${($_ = isset($this->services['monolog.processor.psr_log_message']) ? $this->services['monolog.processor.psr_log_message'] : $this->services['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'monolog.handler.main' shared service.
     *
     * @return \Monolog\Handler\FingersCrossedHandler
     */
    protected function getMonolog_Handler_MainService()
    {
        $this->services['monolog.handler.main'] = $instance = new \Monolog\Handler\FingersCrossedHandler(${($_ = isset($this->services['monolog.handler.nested']) ? $this->services['monolog.handler.nested'] : $this->getMonolog_Handler_NestedService()) && false ?: '_'}, 400, 0, true, true, NULL);

        $instance->pushProcessor(${($_ = isset($this->services['monolog.processor.psr_log_message']) ? $this->services['monolog.processor.psr_log_message'] : $this->services['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'monolog.handler.nested' shared service.
     *
     * @return \Monolog\Handler\StreamHandler
     */
    protected function getMonolog_Handler_NestedService()
    {
        $this->services['monolog.handler.nested'] = $instance = new \Monolog\Handler\StreamHandler(($this->targetDirs[2].'/logs/prod.log'), 100, true, NULL);

        $instance->pushProcessor(${($_ = isset($this->services['monolog.processor.psr_log_message']) ? $this->services['monolog.processor.psr_log_message'] : $this->services['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'monolog.logger.request' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->getMonolog_Handler_ConsoleService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'monolog.processor.psr_log_message' shared service.
     *
     * @return \Monolog\Processor\PsrLogMessageProcessor
     */
    protected function getMonolog_Processor_PsrLogMessageService()
    {
        return $this->services['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor();
    }

    /*
     * Gets the private 'resolve_controller_name_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber
     */
    protected function getResolveControllerNameSubscriberService()
    {
        return $this->services['resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'})) && false ?: '_'});
    }

    /*
     * Gets the private 'response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener
     */
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /*
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /*
     * Gets the private 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.request']) ? $this->services['monolog.logger.request'] : $this->getMonolog_Logger_RequestService()) && false ?: '_'}, $this->targetDirs[3], false);
    }

    /*
     * Gets the private 'security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AccessDecisionManager
     */
    protected function getSecurity_Access_DecisionManagerService()
    {
        return $this->services['security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['security.access.authenticated_voter']) ? $this->services['security.access.authenticated_voter'] : $this->load(__DIR__.'/getSecurity_Access_AuthenticatedVoterService.php')) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['security.access.simple_role_voter']) ? $this->services['security.access.simple_role_voter'] : $this->services['security.access.simple_role_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\RoleVoter()) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['security.access.expression_voter']) ? $this->services['security.access.expression_voter'] : $this->load(__DIR__.'/getSecurity_Access_ExpressionVoterService.php')) && false ?: '_'};
        }, 3), 'affirmative', false, true);
    }

    /*
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['security.authentication.provider.anonymous.main']) ? $this->services['security.authentication.provider.anonymous.main'] : $this->services['security.authentication.provider.anonymous.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'))) && false ?: '_'};
        }, 1), true);

        $instance->setEventDispatcher(${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'security.authentication.trust_resolver' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver
     */
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }

    /*
     * Gets the private 'security.firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\EventListener\FirewallListener
     */
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Bundle\SecurityBundle\EventListener\FirewallListener(new \Symfony\Bundle\SecurityBundle\Security\FirewallMap(new \Symfony\Component\DependencyInjection\ServiceLocator(array('security.firewall.map.context.dev' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.dev']) ? $this->services['security.firewall.map.context.dev'] : $this->load(__DIR__.'/getSecurity_Firewall_Map_Context_DevService.php')) && false ?: '_'};
        }, 'security.firewall.map.context.main' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.main']) ? $this->services['security.firewall.map.context.main'] : $this->load(__DIR__.'/getSecurity_Firewall_Map_Context_MainService.php')) && false ?: '_'};
        })), new RewindableGenerator(function () {
            yield 'security.firewall.map.context.dev' => ${($_ = isset($this->services['security.request_matcher.zfhj2lw']) ? $this->services['security.request_matcher.zfhj2lw'] : $this->services['security.request_matcher.zfhj2lw'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/')) && false ?: '_'};
            yield 'security.firewall.map.context.main' => NULL;
        }, 2)), ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'});
    }

    /*
     * Gets the private 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        return $this->services['security.logout_url_generator'] = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'});
    }

    /*
     * Gets the private 'security.rememberme.response_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\RememberMe\ResponseListener
     */
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }

    /*
     * Gets the private 'security.role_hierarchy' shared service.
     *
     * @return \Symfony\Component\Security\Core\Role\RoleHierarchy
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy(array());
    }

    /*
     * Gets the private 'sensio_framework_extra.cache.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener
     */
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener();
    }

    /*
     * Gets the private 'sensio_framework_extra.controller.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'});
    }

    /*
     * Gets the private 'sensio_framework_extra.converter.datetime' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter
     */
    protected function getSensioFrameworkExtra_Converter_DatetimeService()
    {
        return $this->services['sensio_framework_extra.converter.datetime'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter();
    }

    /*
     * Gets the private 'sensio_framework_extra.converter.doctrine.orm' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter
     */
    protected function getSensioFrameworkExtra_Converter_Doctrine_OrmService()
    {
        return $this->services['sensio_framework_extra.converter.doctrine.orm'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
    }

    /*
     * Gets the private 'sensio_framework_extra.converter.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener(${($_ = isset($this->services['sensio_framework_extra.converter.manager']) ? $this->services['sensio_framework_extra.converter.manager'] : $this->getSensioFrameworkExtra_Converter_ManagerService()) && false ?: '_'}, true);
    }

    /*
     * Gets the private 'sensio_framework_extra.converter.manager' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager
     */
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();

        $instance->add(${($_ = isset($this->services['sensio_framework_extra.converter.doctrine.orm']) ? $this->services['sensio_framework_extra.converter.doctrine.orm'] : $this->getSensioFrameworkExtra_Converter_Doctrine_OrmService()) && false ?: '_'}, 0, 'doctrine.orm');
        $instance->add(${($_ = isset($this->services['sensio_framework_extra.converter.datetime']) ? $this->services['sensio_framework_extra.converter.datetime'] : $this->services['sensio_framework_extra.converter.datetime'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter()) && false ?: '_'}, 0, 'datetime');

        return $instance;
    }

    /*
     * Gets the private 'sensio_framework_extra.security.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->services['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(NULL, new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken')) && false ?: '_'}, ${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy(array())) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'}, ${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->getSecurity_AuthorizationCheckerService()) && false ?: '_'});
    }

    /*
     * Gets the private 'sensio_framework_extra.view.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener($this);
    }

    /*
     * Gets the private 'session.save_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SaveSessionListener
     */
    protected function getSession_SaveListenerService()
    {
        return $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener();
    }

    /*
     * Gets the private 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\ServiceLocator(array('session' => function () {
            return ${($_ = isset($this->services['session']) ? $this->services['session'] : $this->load(__DIR__.'/getSessionService.php')) && false ?: '_'};
        })));
    }

    /*
     * Gets the private 'streamed_response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /*
     * Gets the private 'uri_signer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\UriSigner
     */
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('da9b5df28a92a13823dec70cd91b331cd4557ad8');
    }

    /*
     * Gets the private 'validate_request_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener
     */
    protected function getValidateRequestListenerService()
    {
        return $this->services['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener();
    }

    public function getParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return $this->buildParameters[$name];
        }
        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            $name = $this->normalizeParameterName($name);

            if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
                throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
            }
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return true;
        }
        $name = $this->normalizeParameterName($name);

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            foreach ($this->buildParameters as $name => $value) {
                $parameters[$name] = $value;
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = array(
        'kernel.root_dir' => false,
        'kernel.project_dir' => false,
        'kernel.cache_dir' => false,
        'kernel.logs_dir' => false,
        'kernel.bundles_metadata' => false,
        'session.save_path' => false,
        'validator.mapping.cache.file' => false,
        'router.resource' => false,
        'serializer.mapping.cache.file' => false,
        'twig.default_path' => false,
        'swiftmailer.spool.default.memory.path' => false,
        'doctrine.orm.proxy_dir' => false,
    );
    private $dynamicParameters = array();

    /*
     * Computes a dynamic parameter.
     *
     * @param string The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        switch ($name) {
            case 'kernel.root_dir': $value = ($this->targetDirs[3].'/app'); break;
            case 'kernel.project_dir': $value = $this->targetDirs[3]; break;
            case 'kernel.cache_dir': $value = $this->targetDirs[0]; break;
            case 'kernel.logs_dir': $value = ($this->targetDirs[2].'/logs'); break;
            case 'kernel.bundles_metadata': $value = array(
                'FrameworkBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ),
                'SecurityBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ),
                'TwigBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ),
                'MonologBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ),
                'SwiftmailerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle',
                ),
                'DoctrineBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ),
                'SensioFrameworkExtraBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sensio/framework-extra-bundle'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ),
                'FOSRestBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/friendsofsymfony/rest-bundle'),
                    'namespace' => 'FOS\\RestBundle',
                ),
                'AppBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/src/AppBundle'),
                    'namespace' => 'AppBundle',
                ),
                'NelmioApiDocBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/nelmio/api-doc-bundle'),
                    'namespace' => 'Nelmio\\ApiDocBundle',
                ),
            ); break;
            case 'session.save_path': $value = ($this->targetDirs[3].'/app/../var/sessions/prod'); break;
            case 'validator.mapping.cache.file': $value = ($this->targetDirs[0].'/validation.php'); break;
            case 'router.resource': $value = ($this->targetDirs[3].'/app/config/routing.yml'); break;
            case 'serializer.mapping.cache.file': $value = ($this->targetDirs[0].'/serialization.php'); break;
            case 'twig.default_path': $value = ($this->targetDirs[3].'/templates'); break;
            case 'swiftmailer.spool.default.memory.path': $value = ($this->targetDirs[0].'/swiftmailer/spool/default'); break;
            case 'doctrine.orm.proxy_dir': $value = ($this->targetDirs[0].'/doctrine/orm/Proxies'); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    private $normalizedParameterNames = array();

    private function normalizeParameterName($name)
    {
        if (isset($this->normalizedParameterNames[$normalizedName = strtolower($name)]) || isset($this->parameters[$normalizedName]) || array_key_exists($normalizedName, $this->parameters)) {
            $normalizedName = isset($this->normalizedParameterNames[$normalizedName]) ? $this->normalizedParameterNames[$normalizedName] : $normalizedName;
            if ((string) $name !== $normalizedName) {
                @trigger_error(sprintf('Parameter names will be made case sensitive in Symfony 4.0. Using "%s" instead of "%s" is deprecated since Symfony 3.4.', $name, $normalizedName), E_USER_DEPRECATED);
            }
        } else {
            $normalizedName = $this->normalizedParameterNames[$normalizedName] = (string) $name;
        }

        return $normalizedName;
    }

    /*
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.environment' => 'prod',
            'kernel.debug' => false,
            'kernel.name' => 'app',
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'FOSRestBundle' => 'FOS\\RestBundle\\FOSRestBundle',
                'AppBundle' => 'AppBundle\\AppBundle',
                'NelmioApiDocBundle' => 'Nelmio\\ApiDocBundle\\NelmioApiDocBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appProdProjectContainer',
            'database_host' => 'lpirm-dfs-mysql',
            'database_port' => 3306,
            'database_name' => 'cine',
            'database_user' => 'cine',
            'database_password' => 'cine',
            'mailer_transport' => 'smtp',
            'mailer_host' => '127.0.0.1',
            'mailer_user' => NULL,
            'mailer_password' => NULL,
            'secret' => 'da9b5df28a92a13823dec70cd91b331cd4557ad8',
            'locale' => 'en',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.path' => '/_fragment',
            'kernel.secret' => 'da9b5df28a92a13823dec70cd91b331cd4557ad8',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(

            ),
            'kernel.default_locale' => 'en',
            'templating.helper.code.file_link_format' => NULL,
            'debug.file_link_format' => NULL,
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => array(
                'cache_limiter' => '0',
                'cookie_httponly' => true,
                'gc_probability' => 1,
                'use_strict_mode' => true,
            ),
            'session.metadata.update_threshold' => '0',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'asset.request_context.base_path' => '',
            'asset.request_context.secure' => false,
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
            ),
            'validator.mapping.cache.prefix' => '',
            'validator.translation_domain' => 'validators',
            'data_collector.templates' => array(

            ),
            'debug.error_handler.throw_at' => 0,
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.options.matcher.cache_class' => 'appProdProjectContainerUrlMatcher',
            'router.options.generator.cache_class' => 'appProdProjectContainerUrlGenerator',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.cache_class_prefix' => 'appProdProjectContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'serializer.mapping.cache.prefix' => '',
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.role_hierarchy.roles' => array(

            ),
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => array(
                0 => 'form_div_layout.html.twig',
            ),
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => array(

            ),
            'monolog.handlers_to_channels' => array(
                'monolog.handler.console' => NULL,
                'monolog.handler.main' => NULL,
            ),
            'swiftmailer.class' => 'Swift_Mailer',
            'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport',
            'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport',
            'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport',
            'swiftmailer.plugin.redirecting.class' => 'Swift_Plugins_RedirectingPlugin',
            'swiftmailer.plugin.impersonate.class' => 'Swift_Plugins_ImpersonatePlugin',
            'swiftmailer.plugin.messagelogger.class' => 'Swift_Plugins_MessageLogger',
            'swiftmailer.plugin.antiflood.class' => 'Swift_Plugins_AntiFloodPlugin',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.plugin.blackhole.class' => 'Swift_Plugins_BlackholePlugin',
            'swiftmailer.spool.file.class' => 'Swift_FileSpool',
            'swiftmailer.spool.memory.class' => 'Swift_MemorySpool',
            'swiftmailer.email_sender.listener.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener',
            'swiftmailer.data_collector.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector',
            'swiftmailer.mailer.default.transport.name' => 'smtp',
            'swiftmailer.mailer.default.transport.smtp.encryption' => NULL,
            'swiftmailer.mailer.default.transport.smtp.port' => 25,
            'swiftmailer.mailer.default.transport.smtp.host' => '127.0.0.1',
            'swiftmailer.mailer.default.transport.smtp.username' => NULL,
            'swiftmailer.mailer.default.transport.smtp.password' => NULL,
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => NULL,
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL,
            'swiftmailer.mailer.default.transport.smtp.local_domain' => NULL,
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => array(
                'default' => 'swiftmailer.mailer.default',
            ),
            'swiftmailer.default_mailer' => 'default',
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.predis.client.class' => 'Predis\\Client',
            'doctrine_cache.predis.scheme' => 'tcp',
            'doctrine_cache.predis.host' => 'localhost',
            'doctrine_cache.predis.port' => 6379,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => array(
                'default' => 'doctrine.orm.default_entity_manager',
            ),
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => array(

            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
            ),
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerAwareEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => false,
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'sensio_framework_extra.view.guesser.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Templating\\TemplateGuesser',
            'sensio_framework_extra.controller.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener',
            'sensio_framework_extra.routing.loader.annot_dir.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader',
            'sensio_framework_extra.routing.loader.annot_file.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader',
            'sensio_framework_extra.routing.loader.annot_class.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Routing\\AnnotatedRouteControllerLoader',
            'sensio_framework_extra.converter.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener',
            'sensio_framework_extra.converter.manager.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterManager',
            'sensio_framework_extra.converter.doctrine.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DoctrineParamConverter',
            'sensio_framework_extra.converter.datetime.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DateTimeParamConverter',
            'sensio_framework_extra.view.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener',
            'fos_rest.format_listener.rules' => NULL,
            'nelmio_api_doc.areas' => array(
                0 => 'default',
            ),
            'console.command.ids' => array(
                'console.command.symfony_bundle_frameworkbundle_command_aboutcommand' => 'console.command.about',
                'console.command.symfony_bundle_frameworkbundle_command_assetsinstallcommand' => 'console.command.assets_install',
                'console.command.symfony_bundle_frameworkbundle_command_cacheclearcommand' => 'console.command.cache_clear',
                'console.command.symfony_bundle_frameworkbundle_command_cachepoolclearcommand' => 'console.command.cache_pool_clear',
                'console.command.symfony_bundle_frameworkbundle_command_cachepoolprunecommand' => 'console.command.cache_pool_prune',
                'console.command.symfony_bundle_frameworkbundle_command_cachewarmupcommand' => 'console.command.cache_warmup',
                'console.command.symfony_bundle_frameworkbundle_command_configdebugcommand' => 'console.command.config_debug',
                'console.command.symfony_bundle_frameworkbundle_command_configdumpreferencecommand' => 'console.command.config_dump_reference',
                'console.command.symfony_bundle_frameworkbundle_command_containerdebugcommand' => 'console.command.container_debug',
                'console.command.symfony_bundle_frameworkbundle_command_debugautowiringcommand' => 'console.command.debug_autowiring',
                'console.command.symfony_bundle_frameworkbundle_command_eventdispatcherdebugcommand' => 'console.command.event_dispatcher_debug',
                'console.command.symfony_bundle_frameworkbundle_command_routerdebugcommand' => 'console.command.router_debug',
                'console.command.symfony_bundle_frameworkbundle_command_routermatchcommand' => 'console.command.router_match',
                'console.command.symfony_bundle_frameworkbundle_command_xlifflintcommand' => 'console.command.xliff_lint',
                'console.command.symfony_bundle_frameworkbundle_command_yamllintcommand' => 'console.command.yaml_lint',
                'console.command.symfony_component_form_command_debugcommand' => 'console.command.form_debug',
                'console.command.symfony_bundle_securitybundle_command_userpasswordencodercommand' => 'security.command.user_password_encoder',
                'console.command.symfony_bridge_twig_command_debugcommand' => 'twig.command.debug',
                'console.command.symfony_bundle_twigbundle_command_lintcommand' => 'twig.command.lint',
                'console.command.doctrine_bundle_doctrinecachebundle_command_containscommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_containscommand',
                'console.command.doctrine_bundle_doctrinecachebundle_command_deletecommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_deletecommand',
                'console.command.doctrine_bundle_doctrinecachebundle_command_flushcommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_flushcommand',
                'console.command.doctrine_bundle_doctrinecachebundle_command_statscommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_statscommand',
                'console.command.doctrine_bundle_doctrinebundle_command_createdatabasedoctrinecommand' => 'doctrine.database_create_command',
                'console.command.doctrine_bundle_doctrinebundle_command_dropdatabasedoctrinecommand' => 'doctrine.database_drop_command',
                'console.command.doctrine_bundle_doctrinebundle_command_generateentitiesdoctrinecommand' => 'doctrine.generate_entities_command',
                'console.command.doctrine_bundle_doctrinebundle_command_importmappingdoctrinecommand' => 'doctrine.mapping_import_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_clearmetadatacachedoctrinecommand' => 'doctrine.cache_clear_metadata_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_clearquerycachedoctrinecommand' => 'doctrine.cache_clear_query_cache_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_clearresultcachedoctrinecommand' => 'doctrine.cache_clear_result_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_collectionregiondoctrinecommand' => 'doctrine.cache_collection_region_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_convertmappingdoctrinecommand' => 'doctrine.mapping_convert_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_createschemadoctrinecommand' => 'doctrine.schema_create_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_dropschemadoctrinecommand' => 'doctrine.schema_drop_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_ensureproductionsettingsdoctrinecommand' => 'doctrine.ensure_production_settings_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_entityregioncachedoctrinecommand' => 'doctrine.clear_entity_region_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_importdoctrinecommand' => 'doctrine.database_import_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_infodoctrinecommand' => 'doctrine.mapping_info_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_queryregioncachedoctrinecommand' => 'doctrine.clear_query_region_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_rundqldoctrinecommand' => 'doctrine.query_dql_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_runsqldoctrinecommand' => 'doctrine.query_sql_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_updateschemadoctrinecommand' => 'doctrine.schema_update_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_validateschemacommand' => 'doctrine.schema_validate_command',
            ),
            'console.lazy_command.ids' => array(
                'console.command.about' => true,
                'console.command.assets_install' => true,
                'console.command.cache_clear' => true,
                'console.command.cache_pool_clear' => true,
                'console.command.cache_pool_prune' => true,
                'console.command.cache_warmup' => true,
                'console.command.config_debug' => true,
                'console.command.config_dump_reference' => true,
                'console.command.container_debug' => true,
                'console.command.debug_autowiring' => true,
                'console.command.event_dispatcher_debug' => true,
                'console.command.router_debug' => true,
                'console.command.router_match' => true,
                'console.command.xliff_lint' => true,
                'console.command.yaml_lint' => true,
                'console.command.form_debug' => true,
                'security.command.user_password_encoder' => true,
                'twig.command.debug' => true,
                'twig.command.lint' => true,
                'doctrine.database_create_command' => true,
                'doctrine.database_drop_command' => true,
                'doctrine.generate_entities_command' => true,
                'doctrine.mapping_import_command' => true,
                'doctrine.cache_clear_metadata_command' => true,
                'doctrine.cache_clear_query_cache_command' => true,
                'doctrine.cache_clear_result_command' => true,
                'doctrine.cache_collection_region_command' => true,
                'doctrine.mapping_convert_command' => true,
                'doctrine.schema_create_command' => true,
                'doctrine.schema_drop_command' => true,
                'doctrine.ensure_production_settings_command' => true,
                'doctrine.clear_entity_region_command' => true,
                'doctrine.database_import_command' => true,
                'doctrine.mapping_info_command' => true,
                'doctrine.clear_query_region_command' => true,
                'doctrine.query_dql_command' => true,
                'doctrine.query_sql_command' => true,
                'doctrine.schema_update_command' => true,
                'doctrine.schema_validate_command' => true,
            ),
        );
    }
}
