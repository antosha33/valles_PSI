const fs = require('fs');
const { url } = require('inspector');

const file = fs.readFileSync('./myfile.report.json')
const networkRequestItems = JSON.parse(file).audits['network-requests'].details.items;
// console.log(networkRequestItems);
function printBlockedRequest() {
	const blockedRequests = networkRequestItems.map((item) => {
		if(item.statusCode == -1){
			console.log(item.url);
			// return item.url;
		}
	})
	// return [...blockedRequests];
}

printBlockedRequest();
