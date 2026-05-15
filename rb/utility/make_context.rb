# NoAsAService SDK utility: make_context
require_relative '../core/context'
module NoAsAServiceUtilities
  MakeContext = ->(ctxmap, basectx) {
    NoAsAServiceContext.new(ctxmap, basectx)
  }
end
