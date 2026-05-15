package core

var UtilityRegistrar func(u *Utility)

var NewBaseFeatureFunc func() Feature

var NewTestFeatureFunc func() Feature

var NewNonEntityFunc func(client *NoAsAServiceSDK, entopts map[string]any) NoAsAServiceEntity

