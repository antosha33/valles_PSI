module.exports = {
	extends: "lighthouse:default",
	settings: {
	  onlyCategories: ["performance"],
	  blockedUrlPatterns: [
		  "http://valles.local/bitrix/cache/css/s1/aspro/template_d16edfb84565d0b73a6bbb689cb17dc1/template_d16edfb84565d0b73a6bbb689cb17dc1_v1.css?16147809081095039",
		  "http://valles.local/bitrix/js/main/core/core.js?1600893595544313",
		  "http://valles.local/bitrix/js/main/core/core_ls.js?160089359510430",
		  "*.js",
		  
		//  "*upscore.com*",
		//  "*connect.facebook*",
		//  "*google-analytics.com*"
	  ],
	  ignoreCertificateErrors: true,
	},
 };