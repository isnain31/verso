all: help

#tests: tests-unit tests-functional ## Run all tests.

help: ## Show this help.
	@awk 'BEGIN {FS = ":.*?## "} /^[a-zA-Z_-]+:.*?## / {printf "  \033[36m%-15s\033[0m %s\n", $$1, $$2}' $(MAKEFILE_LIST)

run: ## Runs the main application
	docker exec -it verso /bin/bash -c "php index.php"

test: ## Run tests
	docker exec -it verso /bin/bash -c "php vendor/bin/phpunit tests"