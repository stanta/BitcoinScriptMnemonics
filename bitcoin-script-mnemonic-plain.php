<?php
# Bitcoin script mnemonics as PHP constants  by stanta
# just from https://en.bitcoin.it/wiki/Script
# (cc) (GPL)
# 1M39TMQXDqiHwSbg6fJMTF9XB8eUa9f982 for donations 
# 

define('OP_0' , '0'); 
define('OP_FALSE' , '0'); #');# 0x00#Nothing.(empty value)An empty array of bytes is pushed onto the stack. (This is not a no-op: an item is added to the stack.)
# N/A1-75');# 0x01-');# 0x4b(special)dataThe next opcode bytes is data to be pushed onto the stack
define('OP_PUSHDATA1' , '76');#');# 0x4c(special)dataThe next byte contains the number of bytes to be pushed onto the stack.
define('OP_PUSHDATA2' , '77');#');# 0x4d(special)dataThe next two bytes contain the number of bytes to be pushed onto the stack.
define('OP_PUSHDATA4' , '78');# 0x4e(special)dataThe next four bytes contain the number of bytes to be pushed onto the stack.
define('OP_1NEGATE' , '79');# 0x4fNothing.-1The number -1 is pushed onto the stack.
define('OP_1' , '81'); 
define('OP_TRUE' , '81');# 0x51Nothing.1The number 1 is pushed onto the stack.

# define('OP_2-define('OP_16' , ' 82-96');# 0x52-');# 0x60Nothing.2-16The number in the word name (2-16) is pushed onto the stack.
#
# Flow control
# WordOpcodeHexInputOutputDescription
define('OP_NOP' , '97'); #');# 0x61NothingNothingDoes nothing.
define('OP_IF' , '99'); #');# 0x63<expression> if [statements] [else [statements]]* endifIf the top stack value is not 0, the statements are executed. The top stack value is removed.
define('OP_NOTIF' , '100');#');# 0x64<expression> if [statements] [else [statements]]* endifIf the top stack value is 0, the statements are executed. The top stack value is removed.
define('OP_ELSE' , '103');#');# 0x67<expression> if [statements] [else [statements]]* endifIf the preceding define('OP_IF or define('OP_NOTIF or define('OP_ELSE was not executed then these statements are and if the preceding define('OP_IF or define('OP_NOTIF or define('OP_ELSE was executed then these statements are not.
define('OP_ENDIF' , '104');#');# 0x68<expression> if [statements] [else [statements]]* endifEnds an if/else block. All blocks must end, or the transaction is invalid. An define('OP_ENDIF without define('OP_IF earlier is also invalid.
define('OP_VERIFY' , '105');#');# 0x69True / falseNothing / FalseMarks transaction as invalid if top stack value is not true.
define('OP_RETURN' , '106');#');# 0x6aNothingNothingMarks transaction as invalid. A standard way of attaching extra data to transactions is to add a zero-value output with a scriptPubKey consisting of define('OP_RETURN followed by exactly one pushdata op. Such outputs are provably unspendable, reducing their cost to the network. Currently it is usually considered non-standard (though valid) for a transaction to have more than one define('OP_RETURN output or an define('OP_RETURN output with more than one pushdata op.
#
# Stack
# WordOpcodeHexInputOutputDescription
define('OP_TOALTSTACK' , '107');#');# 0x6bx1(alt)x1Puts the input onto the top of the alt stack. Removes it from the main stack.
define('OP_FROMALTSTACK' , '108');#');# 0x6c(alt)x1x1Puts the input onto the top of the main stack. Removes it from the alt stack.
define('OP_IFDUP' , '115');#');# 0x73xx / x xIf the top stack value is not 0, duplicate it.
define('OP_DEPTH' , '116');#');# 0x74Nothing<Stack size>Puts the number of stack items onto the stack.
define('OP_DROP' , '117');#');# 0x75xNothingRemoves the top stack item.
define('OP_DUP' , '118');#');# 0x76xx xDuplicates the top stack item.
define('OP_NIP' , '119');#');# 0x77x1 x2x2Removes the second-to-top stack item.
define('OP_OVER' , '120');#');# 0x78x1 x2x1 x2 x1Copies the second-to-top stack item to the top.
define('OP_PICK' , '121');#');# 0x79xn ... x2 x1 x0 <n>xn ... x2 x1 x0 xnThe item n back in the stack is copied to the top.
define('OP_ROLL' , '122');#');# 0x7axn ... x2 x1 x0 <n>... x2 x1 x0 xnThe item n back in the stack is moved to the top.
define('OP_ROT' , '123');#');# 0x7bx1 x2 x3x2 x3 x1The top three items on the stack are rotated to the left.
define('OP_SWAP' , '124');#');# 0x7cx1 x2x2 x1The top two items on the stack are swapped.
define('OP_TUCK' , '125');#');# 0x7dx1 x2x2 x1 x2The item at the top of the stack is copied and inserted before the second-to-top item.
define('OP_2DROP' , '109');#');# 0x6dx1 x2NothingRemoves the top two stack items.
define('OP_2DUP' , '110');#');# 0x6ex1 x2x1 x2 x1 x2Duplicates the top two stack items.
define('OP_3DUP' , '111');#');# 0x6fx1 x2 x3x1 x2 x3 x1 x2 x3Duplicates the top three stack items.
define('OP_2OVER' , '112');#');# 0x70x1 x2 x3 x4x1 x2 x3 x4 x1 x2Copies the pair of items two spaces back in the stack to the front.
define('OP_2ROT' , '113');#');# 0x71x1 x2 x3 x4 x5 x6x3 x4 x5 x6 x1 x2The fifth and sixth items back are moved to the top of the stack.
define('OP_2SWAP' , '114');#');# 0x72x1 x2 x3 x4x3 x4 x1 x2Swaps the top two pairs of items.
# Splice WordOpcodeHexInputOutputDescription
define('OP_CAT' , '126');#');# 0x7e  x1 x2outConcatenates two strings. disabled.
define('OP_SUBSTR' , '127');#');# 0x7fin begin sizeoutReturns a section of a string. disabled.
define('OP_LEFT' , '128');# 0x80in sizeoutKeeps only characters left of the specified point in a string. disabled.
define('OP_RIGHT' , '129');# 0x81in sizeoutKeeps only characters right of the specified point in a string. disabled.
define('OP_SIZE' , '130');# 0x82inin sizePushes the string length of the top element of the stack (without popping it).
# Bitwise logic WordOpcodeHexInputOutputDescription
define('OP_INVERT' , '131');# 0x83inoutFlips all of the bits in the input. disabled.
define('OP_AND' , '132');# 0x84x1 x2outBoolean and between each bit in the inputs. disabled.
define('OP_OR' , '133');# 0x85x1 x2outBoolean or between each bit in the inputs. disabled.
define('OP_XOR' , '134');# 0x86x1 x2outBoolean exclusive or between each bit in the inputs. disabled.
define('OP_EQUAL' , '135');# 0x87x1 x2True / falseReturns 1 if the inputs are exactly equal, 0 otherwise.
define('OP_EQUALVERIFY' , '136');# 0x88x1 x2True / falseSame as define('OP_EQUAL, but runs define('OP_VERIFY afterward.

# Arithmetic
# WordOpcodeHexInputOutputDescription
# Note: Arithmetic inputs are limited to signed 32-bit integers, but may overflow their output.
# If any input value for any of these commands is longer than 4 bytes, the script must abort and fail. If any opcode marked as disabled is present in a script - it must also abort and fail.
define('OP_1ADD' , '139');# 0x8binout1 is added to the input.
define('OP_1SUB' , '140');# 0x8cinout1 is subtracted from the input.
define('OP_2MUL' , '141');# 0x8dinoutThe input is multiplied by 2. disabled.
define('OP_2DIV' , '142');# 0x8einoutThe input is divided by 2. disabled.
define('OP_NEGATE' , '143');# 0x8finoutThe sign of the input is flipped.
define('OP_ABS' , '144');# 0x90inoutThe input is made positive.
define('OP_NOT' , '145');# 0x91inoutIf the input is 0 or 1, it is flipped. Otherwise the output will be 0.
define('OP_0NOTEQUAL' , '146');# 0x92inoutReturns 0 if the input is 0. 1 otherwise.
define('OP_ADD' , '147');# 0x93a bouta is added to b.
define('OP_SUB' , '148');# 0x94a boutb is subtracted from a.
define('OP_MUL' , '149');# 0x95a bouta is multiplied by b. disabled.
define('OP_DIV' , '150');# 0x96a bouta is divided by b. disabled.
define('OP_MOD' , '151');# 0x97a boutReturns the remainder after dividing a by b. disabled.
define('OP_LSHIFT' , '152');# 0x98a boutShifts a left b bits, preserving sign. disabled.
define('OP_RSHIFT' , '153');# 0x99a boutShifts a right b bits, preserving sign. disabled.
define('OP_BOOLAND' , '154');# 0x9aa boutIf both a and b are not 0, the output is 1. Otherwise 0.
define('OP_BOOLOR' , '155');# 0x9ba boutIf a or b is not 0, the output is 1. Otherwise 0.
define('OP_NUMEQUAL' , '156');# 0x9ca boutReturns 1 if the numbers are equal, 0 otherwise.
define('OP_NUMEQUALVERIFY' , '157');# 0x9da boutSame as define('OP_NUMEQUAL, but runs define('OP_VERIFY afterward.
define('OP_NUMNOTEQUAL' , '158');# 0x9ea boutReturns 1 if the numbers are not equal, 0 otherwise.
define('OP_LESSTHAN' , '159');# 0x9fa boutReturns 1 if a is less than b, 0 otherwise.
define('OP_GREATERTHAN' , '160');# 0xa0a boutReturns 1 if a is greater than b, 0 otherwise.
define('OP_LESSTHANOREQUAL' , '161');# 0xa1a boutReturns 1 if a is less than or equal to b, 0 otherwise.
define('OP_GREATERTHANOREQUAL' , '162');# 0xa2a boutReturns 1 if a is greater than or equal to b, 0 otherwise.
define('OP_MIN' , '163');# 0xa3a boutReturns the smaller of a and b.
define('OP_MAX' , '164');# 0xa4a boutReturns the larger of a and b.
define('OP_WITHIN' , '165');# 0xa5x min maxoutReturns 1 if x is within the specified range (left-inclusive), 0 otherwise.

# Crypto
# WordOpcodeHexInputOutputDescription
define('OP_RIPEMD160' , '166');# 0xa6inhashThe input is hashed using RIPEMD-160.
define('OP_SHA1' , '167');# 0xa7inhashThe input is hashed using SHA-1.
define('OP_SHA256' , '168');# 0xa8inhashThe input is hashed using SHA-256.
define('OP_HASH160' , '169');# 0xa9inhashThe input is hashed twice: first with SHA-256 and then with RIPEMD-160.
define('OP_HASH256' , '170');# 0xaainhashThe input is hashed two times with SHA-256.
define('OP_CODESEPARATOR' , '171');# 0xabNothingNothingAll of the signature checking words will only match signatures to the data after the most recently-executed define('OP_CODESEPARATOR.
define('OP_CHECKSIG' , '172');# 0xacsig pubkeyTrue / falseThe entire transaction's outputs, inputs, and script (from the most recently-executed define('OP_CODESEPARATOR to the end) are hashed. The signature used by define('OP_CHECKSIG must be a valid signature for this hash and public key. If it is, 1 is returned, 0 otherwise.
define('OP_CHECKSIGVERIFY' , '173');# 0xadsig pubkeyTrue / falseSame as define('OP_CHECKSIG, but define('OP_VERIFY is executed afterward.
define('OP_CHECKMULTISIG' , '174');# 0xaex sig1 sig2 ... <number of signatures> pub1 pub2 <number of public keys>True / FalseCompares the first signature against each public key until it finds an ECDSA match. Starting with the subsequent public key, it compares the second signature against each remaining public key until it finds an ECDSA match. The process is repeated until all signatures have been checked or not enough public keys remain to produce a successful result. All signatures need to match a public key. Because public keys are not checked again if they fail any signature comparison, signatures must be placed in the scriptSig using the same order as their corresponding public keys were placed in the scriptPubKey or redeemScript. If all signatures are valid, 1 is returned, 0 otherwise. Due to a bug, one extra unused value is removed from the stack.
define('OP_CHECKMULTISIGVERIFY' , '175');# 0xafx sig1 sig2 ... <number of signatures> pub1 pub2 ... <number of public keys>True / FalseSame as define('OP_CHECKMULTISIG, but define('OP_VERIFY is executed afterward.
# Locktime 
#WordOpcodeHexInputOutputDescription
define('OP_CHECKLOCKTIMEVERIFY' , '177');# 0xb1NothingNothing/ FalseThis word is ignored and does nothing until BIP65 is enforced. Marks transaction as invalid if the top stack item is greater than the transaction's nLockTime field, otherwise script evaluation continues as though an define('OP_NOP was executed. Transaction is also invalid if 1. the top stack item is negative'); or 2. the top stack item is greater than or equal to 500000000 while the transaction's nLockTime field is less than 500000000, or vice versa'); or 3. the input's nSequence field is equal to ');# 0xffffffff. The precise semantics are described in BIP 0065

#Pseudo-words 
#WordOpcodeHexDescriptionWordOpcode
define('OP_PUBKEYHASH' , '253');# 0xfdRepresents a public key hashed with define('OP_HASH160.define('OP_PUBKEYHASH253
define('OP_PUBKEY' , '254');# 0xfeRepresents a public key compatible with define('OP_CHECKSIG.define('OP_PUBKEY254
define('OP_INVALIDOPCODE' , '255');# 0xffMatches any opcode that is not yet assigned.define('OP_INVALIDOPCODE255
# Reserved 
#words WordOpcodeHexDescription
define('OP_RESERVED' , '80');# 0x50Transaction is invalid unless occuring in an unexecuted define('OP_IF branch
define('OP_VER' , '98');# 0x62Transaction is invalid unless occuring in an unexecuted define('OP_IF branch
define('OP_VERIF' , '101');# 0x65Transaction is invalid even when occuring in an unexecuted define('OP_IF branch
define('OP_VERNOTIF' , '102');# 0x66Transaction is invalid even when occuring in an unexecuted define('OP_IF branch
define('OP_RESERVED1' , '137');# 0x89Transaction is invalid unless occuring in an unexecuted define('OP_IF branch
define('OP_RESERVED2' , '138');# 0x8aTransaction is invalid unless occuring in an unexecuted define('OP_IF branch
#define('OP_NOP1, define('OP_NOP3-define('OP_NOP10176, 178-185');# 0xb0, ');# 0xb2-');# 0xb9The word is ignored. Does not mark transaction as invalid.
?>