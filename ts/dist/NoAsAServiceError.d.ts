import { Context } from './Context';
declare class NoAsAServiceError extends Error {
    isNoAsAServiceError: boolean;
    sdk: string;
    code: string;
    ctx: Context;
    status: number;
    get notFound(): boolean;
    constructor(code: string, msg: string, ctx: Context);
}
export { NoAsAServiceError };
