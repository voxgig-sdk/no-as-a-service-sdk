# NoAsAService SDK utility: make_context

from core.context import NoAsAServiceContext


def make_context_util(ctxmap, basectx):
    return NoAsAServiceContext(ctxmap, basectx)
