PROJECT_ROOT=html

.PHONY: dev
dev:
	serve $(PROJECT_ROOT)

.PHONY: validate
validate:
	vnu --skip-non-html --also-check-css html
