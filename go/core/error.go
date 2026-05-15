package core

type NoAsAServiceError struct {
	IsNoAsAServiceError bool
	Sdk              string
	Code             string
	Msg              string
	Ctx              *Context
	Result           any
	Spec             any
}

func NewNoAsAServiceError(code string, msg string, ctx *Context) *NoAsAServiceError {
	return &NoAsAServiceError{
		IsNoAsAServiceError: true,
		Sdk:              "NoAsAService",
		Code:             code,
		Msg:              msg,
		Ctx:              ctx,
	}
}

func (e *NoAsAServiceError) Error() string {
	return e.Msg
}
