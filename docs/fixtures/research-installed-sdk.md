# Synthetic installed SDK state

This fixture is not a real package or external source.

```text
Root constraint: example/http-sdk:^2.4
Locked version: 2.4.3
Installed path: vendor/example/http-sdk
Installed reference: synthetic-243
Installed README: request timeout accepts positive integer milliseconds.
Installed source: ClientOptions::withTimeout(int $milliseconds) rejects values below 1.
Installed changelog: withTimeout was introduced in 2.4.0; no later 2.4 deprecation is recorded.
Question: May the integration pass a floating-point number of seconds to withTimeout?
```

The package name and evidence are deliberately synthetic. No web lookup is needed or permitted for this case.
