# NoAsAService SDK feature factory

from noasaservice_sdk.feature.base_feature import NoAsAServiceBaseFeature
from noasaservice_sdk.feature.ratelimit_feature import NoAsAServiceRatelimitFeature
from noasaservice_sdk.feature.retry_feature import NoAsAServiceRetryFeature
from noasaservice_sdk.feature.test_feature import NoAsAServiceTestFeature
from noasaservice_sdk.feature.timeout_feature import NoAsAServiceTimeoutFeature


_FEATURES = {
    "base": lambda: NoAsAServiceBaseFeature(),
    "ratelimit": lambda: NoAsAServiceRatelimitFeature(),
    "retry": lambda: NoAsAServiceRetryFeature(),
    "test": lambda: NoAsAServiceTestFeature(),
    "timeout": lambda: NoAsAServiceTimeoutFeature(),
}


def _make_feature(name):
    factory = _FEATURES.get(name)
    if factory is not None:
        return factory()
    return _FEATURES["base"]()


# True when this SDK was generated with the named feature class - the
# constructor's tolerance for extend-carried features reads this (an
# active name with no generated class must not become a BaseFeature
# stray when an extend instance carries it).
def _has_feature(name):
    return name in _FEATURES
