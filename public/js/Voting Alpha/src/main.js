const { Blockchain, Vote } = require('./blockchain');
const EC = require('elliptic').ec;
const ec = new EC('secp256k1');

const voteChain = new Blockchain();

function sendVote(voteraddress, person, privatekey) {
  ballot = new Vote(voteraddress, person, 0);
  var prKey = ec.keyFromPrivate(privatekey);
  ballot.signVote(prKey);
  voteChain.addVote(ballot);
  voteChain.mineVote();
}

sendVote("044dc17dfa4e82b872ba3596f489b5749ddf6cb37f2eeefe92e55bf7b14b0dc32f45d8303d01a3cd337e45fedc1a968b766fc4ca43fe2966393506bfb213d8581b", "Stephanie", "68e1c3f30abb352d83849af0785b57b109fe551a2fa11bc89168f2f7d36c76b0");


// Uncomment this line if you want to test tampering with the chain
// voteChain.chain[1].Votes[0].amount = 10;

// Check if the chain is valid
console.log();
console.log('Blockchain valid?', voteChain.isChainValid() ? 'Yes' : 'No');
console.log(JSON.stringify(voteChain, null, 4));
