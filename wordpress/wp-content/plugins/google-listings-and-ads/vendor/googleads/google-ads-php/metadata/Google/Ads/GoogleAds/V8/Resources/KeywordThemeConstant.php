<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/resources/keyword_theme_constant.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V8\Resources;

class KeywordThemeConstant
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
>google/ads/googleads/v8/resources/keyword_theme_constant.proto!google.ads.googleads.v8.resourcesgoogle/api/resource.protogoogle/api/annotations.proto"�
KeywordThemeConstantL
resource_name (	B5�A�A/
-googleads.googleapis.com/KeywordThemeConstant
country_code (	B�AH �
language_code (	B�AH�
display_name (	B�AH�:y�Av
-googleads.googleapis.com/KeywordThemeConstantEkeywordThemeConstants/{express_category_id}~{express_sub_category_id}B
_country_codeB
_language_codeB
_display_nameB�
%com.google.ads.googleads.v8.resourcesBKeywordThemeConstantProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v8/resources;resources�GAA�!Google.Ads.GoogleAds.V8.Resources�!Google\\Ads\\GoogleAds\\V8\\Resources�%Google::Ads::GoogleAds::V8::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

