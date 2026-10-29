# Synthetic payment timeout configuration

This fixture is not copied from a real repository.

```text
config/default.php: payment timeout is 30 seconds.
src/Environment.php: PAYMENT_TIMEOUT is parsed as an integer when present.
src/PaymentClient.php: constructor accepts timeoutSeconds and rejects values below 1.
tests/PaymentClientTest.php: covers the constructor default only.
docs/configuration.md: does not mention PAYMENT_TIMEOUT.
```

Requested change: “Make `PAYMENT_TIMEOUT` configurable and keep the current default.”
