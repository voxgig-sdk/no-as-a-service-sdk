# NoAsAService SDK exists test

require "minitest/autorun"
require_relative "../NoAsAService_sdk"

class ExistsTest < Minitest::Test
  def test_create_test_sdk
    testsdk = NoAsAServiceSDK.test(nil, nil)
    assert !testsdk.nil?
  end
end
