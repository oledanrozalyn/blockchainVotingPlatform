const { Blockchain, Vote } = require('./blockchain');
const EC = require('elliptic').ec;
const ec = new EC('secp256k1');

function sendVote(myWalletAddress, person) {
  //const tx0 = new Vote(myWalletAddress, person, 0);
  alert('success');
}
// Your private key goes here
var myKey = ec.keyFromPrivate('7c4c45907dec40c91bab3480c39032e90049f1a44f3e18c3e07c23e3273995cf');

// From that we can calculate your public key (which doubles as your wallet address)
const myWalletAddress = myKey.getPublic('hex');

// Create new instance of Blockchain class
const voteChain = new Blockchain();

// Create a Vote & sign it with your key
const tx1 = new Vote(myWalletAddress, 'address2', 0);
tx1.signVote(myKey);
voteChain.addVote(tx1);

// Mine block
voteChain.mineVote();

// Create second Vote
const tx2 = new Vote(myWalletAddress, 'address1', 0);
tx2.signVote(myKey);
voteChain.addVote(tx2);

// Mine block
voteChain.mineVote();

console.log();
console.log(`Balance of xavier is ${voteChain.getBalanceOfAddress(myWalletAddress)}`);

// Uncomment this line if you want to test tampering with the chain
// voteChain.chain[1].Votes[0].amount = 10;

// Check if the chain is valid
console.log();
console.log('Blockchain valid?', voteChain.isChainValid() ? 'Yes' : 'No');
console.log(JSON.stringify(voteChain, null, 4));
