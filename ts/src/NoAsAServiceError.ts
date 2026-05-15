
import { Context } from './Context'


class NoAsAServiceError extends Error {

  isNoAsAServiceError = true

  sdk = 'NoAsAService'

  code: string
  ctx: Context

  constructor(code: string, msg: string, ctx: Context) {
    super(msg)
    this.code = code
    this.ctx = ctx
  }

}

export {
  NoAsAServiceError
}

