# NoAsAService SDK utility: make_context

from noasaservice_sdk.core.context import NoAsAServiceContext


def make_context_util(ctxmap, basectx):
    return NoAsAServiceContext(ctxmap, basectx)
