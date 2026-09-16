# NoAsAService SDK feature factory

require_relative 'feature/base_feature'
require_relative 'feature/ratelimit_feature'
require_relative 'feature/retry_feature'
require_relative 'feature/test_feature'
require_relative 'feature/timeout_feature'


module NoAsAServiceFeatures
  def self.make_feature(name)
    case name
    when "base"
      NoAsAServiceBaseFeature.new
    when "ratelimit"
      NoAsAServiceRatelimitFeature.new
    when "retry"
      NoAsAServiceRetryFeature.new
    when "test"
      NoAsAServiceTestFeature.new
    when "timeout"
      NoAsAServiceTimeoutFeature.new
    else
      NoAsAServiceBaseFeature.new
    end
  end
end
