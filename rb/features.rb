# NoAsAService SDK feature factory

require_relative 'feature/base_feature'
require_relative 'feature/test_feature'


module NoAsAServiceFeatures
  def self.make_feature(name)
    case name
    when "base"
      NoAsAServiceBaseFeature.new
    when "test"
      NoAsAServiceTestFeature.new
    else
      NoAsAServiceBaseFeature.new
    end
  end
end
