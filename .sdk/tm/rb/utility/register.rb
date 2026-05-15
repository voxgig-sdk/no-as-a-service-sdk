# NoAsAService SDK utility registration
require_relative '../core/utility_type'
require_relative 'clean'
require_relative 'done'
require_relative 'make_error'
require_relative 'feature_add'
require_relative 'feature_hook'
require_relative 'feature_init'
require_relative 'fetcher'
require_relative 'make_fetch_def'
require_relative 'make_context'
require_relative 'make_options'
require_relative 'make_request'
require_relative 'make_response'
require_relative 'make_result'
require_relative 'make_point'
require_relative 'make_spec'
require_relative 'make_url'
require_relative 'param'
require_relative 'prepare_auth'
require_relative 'prepare_body'
require_relative 'prepare_headers'
require_relative 'prepare_method'
require_relative 'prepare_params'
require_relative 'prepare_path'
require_relative 'prepare_query'
require_relative 'result_basic'
require_relative 'result_body'
require_relative 'result_headers'
require_relative 'transform_request'
require_relative 'transform_response'

NoAsAServiceUtility.registrar = ->(u) {
  u.clean = NoAsAServiceUtilities::Clean
  u.done = NoAsAServiceUtilities::Done
  u.make_error = NoAsAServiceUtilities::MakeError
  u.feature_add = NoAsAServiceUtilities::FeatureAdd
  u.feature_hook = NoAsAServiceUtilities::FeatureHook
  u.feature_init = NoAsAServiceUtilities::FeatureInit
  u.fetcher = NoAsAServiceUtilities::Fetcher
  u.make_fetch_def = NoAsAServiceUtilities::MakeFetchDef
  u.make_context = NoAsAServiceUtilities::MakeContext
  u.make_options = NoAsAServiceUtilities::MakeOptions
  u.make_request = NoAsAServiceUtilities::MakeRequest
  u.make_response = NoAsAServiceUtilities::MakeResponse
  u.make_result = NoAsAServiceUtilities::MakeResult
  u.make_point = NoAsAServiceUtilities::MakePoint
  u.make_spec = NoAsAServiceUtilities::MakeSpec
  u.make_url = NoAsAServiceUtilities::MakeUrl
  u.param = NoAsAServiceUtilities::Param
  u.prepare_auth = NoAsAServiceUtilities::PrepareAuth
  u.prepare_body = NoAsAServiceUtilities::PrepareBody
  u.prepare_headers = NoAsAServiceUtilities::PrepareHeaders
  u.prepare_method = NoAsAServiceUtilities::PrepareMethod
  u.prepare_params = NoAsAServiceUtilities::PrepareParams
  u.prepare_path = NoAsAServiceUtilities::PreparePath
  u.prepare_query = NoAsAServiceUtilities::PrepareQuery
  u.result_basic = NoAsAServiceUtilities::ResultBasic
  u.result_body = NoAsAServiceUtilities::ResultBody
  u.result_headers = NoAsAServiceUtilities::ResultHeaders
  u.transform_request = NoAsAServiceUtilities::TransformRequest
  u.transform_response = NoAsAServiceUtilities::TransformResponse
}
