# Synthetic endpoint precedence

This fixture is not copied from a real repository.

```text
Committed default: https://service.invalid
.env loader: writes only variables absent from the process environment.
Process environment: read after .env loading.
CLI --endpoint: applied to the configuration object after environment parsing.
Production runtime: documented as injecting environment variables, but its deployment configuration is absent.
```

No secret values are present or required.
