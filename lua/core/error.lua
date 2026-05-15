-- NoAsAService SDK error

local NoAsAServiceError = {}
NoAsAServiceError.__index = NoAsAServiceError


function NoAsAServiceError.new(code, msg, ctx)
  local self = setmetatable({}, NoAsAServiceError)
  self.is_sdk_error = true
  self.sdk = "NoAsAService"
  self.code = code or ""
  self.msg = msg or ""
  self.ctx = ctx
  self.result = nil
  self.spec = nil
  return self
end


function NoAsAServiceError:error()
  return self.msg
end


function NoAsAServiceError:__tostring()
  return self.msg
end


return NoAsAServiceError
