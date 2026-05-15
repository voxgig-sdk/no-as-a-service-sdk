# NoAsAService SDK utility: feature_add
module NoAsAServiceUtilities
  FeatureAdd = ->(ctx, f) {
    ctx.client.features << f
  }
end
