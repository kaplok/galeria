<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:42)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:72)'
                        .'|co(?'
                            .'|ntexts/(.+)(?:\\.([^/]++))?(*:110)'
                            .'|mments(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:145)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:183)'
                                .')'
                            .')'
                        .')'
                        .'|albums(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:221)'
                            .')'
                            .'|/(?'
                                .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:262)'
                                .')'
                                .'|([^/]++)(?'
                                    .'|(*:282)'
                                    .'|/images(*:297)'
                                .')'
                            .')'
                        .')'
                        .'|image(?'
                            .'|s(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:338)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:376)'
                                .')'
                            .')'
                            .'|/([^/]++)(*:395)'
                        .')'
                        .'|tags(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:429)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:467)'
                            .')'
                        .')'
                        .'|users(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:503)'
                            .')'
                            .'|/(?'
                                .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:544)'
                                .')'
                                .'|([^/]++)(*:561)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:601)'
                .'|/image/([^/]++)(*:624)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        42 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        72 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        110 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        145 => [
            [['_route' => 'api_comments_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Comment', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_comments_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Comment', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        183 => [
            [['_route' => 'api_comments_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Comment', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_comments_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Comment', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_comments_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Comment', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_comments_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Comment', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        221 => [
            [['_route' => 'api_albums_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Album', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_albums_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Album', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        262 => [
            [['_route' => 'api_albums_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Album', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_albums_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Album', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api_albums_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Album', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_albums_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Album', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        282 => [[['_route' => 'api_albums_get_album_photos_item', '_controller' => 'GetAlbumPhotosController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Album', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get_album_photos'], ['albumId'], ['GET' => 0], null, false, true, null]],
        297 => [[['_route' => 'get_album_photos_controller', '_controller' => 'App\\Controller\\GetAlbumPhotosController'], ['albumId'], null, null, false, false, null]],
        338 => [
            [['_route' => 'api_images_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Image', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_images_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Image', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        376 => [
            [['_route' => 'api_images_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Image', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_images_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Image', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api_images_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Image', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_images_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Image', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        395 => [[['_route' => 'api_images_get_with_base64_item', '_controller' => 'App\\Controller\\FileImageController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Image', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get_with_base64'], ['imageName'], ['GET' => 0], null, false, true, null]],
        429 => [
            [['_route' => 'api_tags_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_tags_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        467 => [
            [['_route' => 'api_tags_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_tags_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_tags_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_tags_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Tag', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        503 => [
            [['_route' => 'api_users_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_users_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        544 => [
            [['_route' => 'api_users_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_users_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'api_users_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_users_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        561 => [[['_route' => 'api_users_get_by_name_item', '_controller' => 'App\\Controller\\UserByName', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get_by_name'], ['name'], ['GET' => 0], null, false, true, null]],
        601 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        624 => [
            [['_route' => 'file_controller', '_controller' => 'App\\Controller\\FileImageController'], ['imageName'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
