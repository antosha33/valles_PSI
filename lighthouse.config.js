module.exports = {
	extends: "lighthouse:default",
	settings: {
		onlyCategories: ["performance"],
		blockedUrlPatterns: [
			// "*fonts.googleapis.com/css*",
			// "*.css"
			// "*slick.min.js",
			// "*owl*.js",
			// "*bxslider.js",
			// "*flexslider.js",
			// "*flexslider.js",
			// "*footable.js",
			// "*gtm.js",
			// "*tag.js",
			// "*client.js",
			// "*ba.js",
			//   "*template*.js",
			//   "*template*.",
		],
		ignoreCertificateErrors: true,
	},
};