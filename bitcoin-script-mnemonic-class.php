<?php
# Bitcoin script mnemonics as PHP constants  by stanta
# just from https://en.bitcoin.it/wiki/Script
# (cc) (GPL)
# 1M39TMQXDqiHwSbg6fJMTF9XB8eUa9f982 for donations 
# 

class BitcoinScriptMnemonics
{
# Constants
# WordOpcodeHexInputOutputDescription

const OP_0 = 0; 
const OP_FALSE= 0; #;# 0x00#Nothing.(empty value)An empty array of bytes is pushed onto the stack. (This is not a no-op: an item is added to the stack.)
# N/A1-75;# 0x01-;# 0x4b(special)dataThe next opcode bytes is data to be pushed onto the stack
const OP_PUSHDATA1 =76;#;# 0x4c(special)dataThe next byte contains the number of bytes to be pushed onto the stack.
const OP_PUSHDATA2=77;#;# 0x4d(special)dataThe next two bytes contain the number of bytes to be pushed onto the stack.
const OP_PUSHDATA4 =78;# 0x4e(special)dataThe next four bytes contain the number of bytes to be pushed onto the stack.
const OP_1NEGATE=79;# 0x4fNothing.-1The number -1 is pushed onto the stack.
const OP_1 = 81;
const OP_TRUE=81;# 0x51Nothing.1The number 1 is pushed onto the stack.

# OP_2-OP_16= 82-96;# 0x52-;# 0x60Nothing.2-16The number in the word name (2-16) is pushed onto the stack.
#
# Flow control
# WordOpcodeHexInputOutputDescription
const OP_NOP=97;#;# 0x61NothingNothingDoes nothing.
const OP_IF=99;#;# 0x63<expression> if [statements] [else [statements]]* endifIf the top stack value is not 0, the statements are executed. The top stack value is removed.
const OP_NOTIF =100;#;# 0x64<expression> if [statements] [else [statements]]* endifIf the top stack value is 0, the statements are executed. The top stack value is removed.
const OP_ELSE= 103;#;# 0x67<expression> if [statements] [else [statements]]* endifIf the preceding OP_IF or OP_NOTIF or OP_ELSE was not executed then these statements are and if the preceding OP_IF or OP_NOTIF or OP_ELSE was executed then these statements are not.
const OP_ENDIF =104;#;# 0x68<expression> if [statements] [else [statements]]* endifEnds an if/else block. All blocks must end, or the transaction is invalid. An OP_ENDIF without OP_IF earlier is also invalid.
const OP_VERIFY =105;#;# 0x69True / falseNothing / FalseMarks transaction as invalid if top stack value is not true.
const OP_RETURN =106;#;# 0x6aNothingNothingMarks transaction as invalid. A standard way of attaching extra data to transactions is to add a zero-value output with a scriptPubKey consisting of OP_RETURN followed by exactly one pushdata op. Such outputs are provably unspendable, reducing their cost to the network. Currently it is usually considered non-standard (though valid) for a transaction to have more than one OP_RETURN output or an OP_RETURN output with more than one pushdata op.
#
# Stack
# WordOpcodeHexInputOutputDescription
const OP_TOALTSTACK=107;#;# 0x6bx1(alt)x1Puts the input onto the top of the alt stack. Removes it from the main stack.
const OP_FROMALTSTACK=108;#;# 0x6c(alt)x1x1Puts the input onto the top of the main stack. Removes it from the alt stack.
const OP_IFDUP=115;#;# 0x73xx / x xIf the top stack value is not 0, duplicate it.
const OP_DEPTH=116;#;# 0x74Nothing<Stack size>Puts the number of stack items onto the stack.
const OP_DROP=117;#;# 0x75xNothingRemoves the top stack item.
const OP_DUP=118;#;# 0x76xx xDuplicates the top stack item.
const OP_NIP=119;#;# 0x77x1 x2x2Removes the second-to-top stack item.
const OP_OVER=120;#;# 0x78x1 x2x1 x2 x1Copies the second-to-top stack item to the top.
const OP_PICK=121;#;# 0x79xn ... x2 x1 x0 <n>xn ... x2 x1 x0 xnThe item n back in the stack is copied to the top.
const OP_ROLL=122;#;# 0x7axn ... x2 x1 x0 <n>... x2 x1 x0 xnThe item n back in the stack is moved to the top.
const OP_ROT=123;#;# 0x7bx1 x2 x3x2 x3 x1The top three items on the stack are rotated to the left.
const OP_SWAP=124;#;# 0x7cx1 x2x2 x1The top two items on the stack are swapped.
const OP_TUCK=125;#;# 0x7dx1 x2x2 x1 x2The item at the top of the stack is copied and inserted before the second-to-top item.
const OP_2DROP=109;#;# 0x6dx1 x2NothingRemoves the top two stack items.
const OP_2DUP=110;#;# 0x6ex1 x2x1 x2 x1 x2Duplicates the top two stack items.
const OP_3DUP=111;#;# 0x6fx1 x2 x3x1 x2 x3 x1 x2 x3Duplicates the top three stack items.
const OP_2OVER=112;#;# 0x70x1 x2 x3 x4x1 x2 x3 x4 x1 x2Copies the pair of items two spaces back in the stack to the front.
const OP_2ROT=113;#;# 0x71x1 x2 x3 x4 x5 x6x3 x4 x5 x6 x1 x2The fifth and sixth items back are moved to the top of the stack.
const OP_2SWAP=114;#;# 0x72x1 x2 x3 x4x3 x4 x1 x2Swaps the top two pairs of items.
# Splice WordOpcodeHexInputOutputDescription
const OP_CAT=126;#;# 0x7e  x1 x2outConcatenates two strings. disabled.
const OP_SUBSTR=127 ;#;# 0x7fin begin sizeoutReturns a section of a string. disabled.
const OP_LEFT=128;# 0x80in sizeoutKeeps only characters left of the specified point in a string. disabled.
const OP_RIGHT=129;# 0x81in sizeoutKeeps only characters right of the specified point in a string. disabled.
const OP_SIZE=130;# 0x82inin sizePushes the string length of the top element of the stack (without popping it).
# Bitwise logic WordOpcodeHexInputOutputDescription
const OP_INVERT=131;# 0x83inoutFlips all of the bits in the input. disabled.
const OP_AND=132;# 0x84x1 x2outBoolean and between each bit in the inputs. disabled.
const OP_OR=133;# 0x85x1 x2outBoolean or between each bit in the inputs. disabled.
const OP_XOR=134;# 0x86x1 x2outBoolean exclusive or between each bit in the inputs. disabled.
const OP_EQUAL=135;# 0x87x1 x2True / falseReturns 1 if the inputs are exactly equal, 0 otherwise.
const OP_EQUALVERIFY=136;# 0x88x1 x2True / falseSame as OP_EQUAL, but runs OP_VERIFY afterward.

# Arithmetic
# WordOpcodeHexInputOutputDescription
# Note: Arithmetic inputs are limited to signed 32-bit integers, but may overflow their output.
# If any input value for any of these commands is longer than 4 bytes, the script must abort and fail. If any opcode marked as disabled is present in a script - it must also abort and fail.
const OP_1ADD=139;# 0x8binout1 is added to the input.
const OP_1SUB=140;# 0x8cinout1 is subtracted from the input.
const OP_2MUL=141;# 0x8dinoutThe input is multiplied by 2. disabled.
const OP_2DIV=142;# 0x8einoutThe input is divided by 2. disabled.
const OP_NEGATE=143;# 0x8finoutThe sign of the input is flipped.
const OP_ABS=144;# 0x90inoutThe input is made positive.
const OP_NOT=145;# 0x91inoutIf the input is 0 or 1, it is flipped. Otherwise the output will be 0.
const OP_0NOTEQUAL=146;# 0x92inoutReturns 0 if the input is 0. 1 otherwise.
const OP_ADD=147;# 0x93a bouta is added to b.
const OP_SUB=148;# 0x94a boutb is subtracted from a.
const OP_MUL=149;# 0x95a bouta is multiplied by b. disabled.
const OP_DIV=150;# 0x96a bouta is divided by b. disabled.
const OP_MOD=151;# 0x97a boutReturns the remainder after dividing a by b. disabled.
const OP_LSHIFT=152;# 0x98a boutShifts a left b bits, preserving sign. disabled.
const OP_RSHIFT=153;# 0x99a boutShifts a right b bits, preserving sign. disabled.
const OP_BOOLAND=154;# 0x9aa boutIf both a and b are not 0, the output is 1. Otherwise 0.
const OP_BOOLOR=155;# 0x9ba boutIf a or b is not 0, the output is 1. Otherwise 0.
const OP_NUMEQUAL=156;# 0x9ca boutReturns 1 if the numbers are equal, 0 otherwise.
const OP_NUMEQUALVERIFY=157;# 0x9da boutSame as OP_NUMEQUAL, but runs OP_VERIFY afterward.
const OP_NUMNOTEQUAL=158;# 0x9ea boutReturns 1 if the numbers are not equal, 0 otherwise.
const OP_LESSTHAN=159;# 0x9fa boutReturns 1 if a is less than b, 0 otherwise.
const OP_GREATERTHAN=160;# 0xa0a boutReturns 1 if a is greater than b, 0 otherwise.
const OP_LESSTHANOREQUAL=161;# 0xa1a boutReturns 1 if a is less than or equal to b, 0 otherwise.
const OP_GREATERTHANOREQUAL=162;# 0xa2a boutReturns 1 if a is greater than or equal to b, 0 otherwise.
const OP_MIN=163;# 0xa3a boutReturns the smaller of a and b.
const OP_MAX=164;# 0xa4a boutReturns the larger of a and b.
const OP_WITHIN=165;# 0xa5x min maxoutReturns 1 if x is within the specified range (left-inclusive), 0 otherwise.

# Crypto
# WordOpcodeHexInputOutputDescription
const OP_RIPEMD160=166;# 0xa6inhashThe input is hashed using RIPEMD-160.
const OP_SHA1=167;# 0xa7inhashThe input is hashed using SHA-1.
const OP_SHA256=168;# 0xa8inhashThe input is hashed using SHA-256.
const OP_HASH160=169;# 0xa9inhashThe input is hashed twice: first with SHA-256 and then with RIPEMD-160.
const OP_HASH256=170;# 0xaainhashThe input is hashed two times with SHA-256.
const OP_CODESEPARATOR=171;# 0xabNothingNothingAll of the signature checking words will only match signatures to the data after the most recently-executed OP_CODESEPARATOR.
const OP_CHECKSIG= 172;# 0xacsig pubkeyTrue / falseThe entire transaction's outputs, inputs, and script (from the most recently-executed OP_CODESEPARATOR to the end) are hashed. The signature used by OP_CHECKSIG must be a valid signature for this hash and public key. If it is, 1 is returned, 0 otherwise.
const OP_CHECKSIGVERIFY=173;# 0xadsig pubkeyTrue / falseSame as OP_CHECKSIG, but OP_VERIFY is executed afterward.
const OP_CHECKMULTISIG=174;# 0xaex sig1 sig2 ... <number of signatures> pub1 pub2 <number of public keys>True / FalseCompares the first signature against each public key until it finds an ECDSA match. Starting with the subsequent public key, it compares the second signature against each remaining public key until it finds an ECDSA match. The process is repeated until all signatures have been checked or not enough public keys remain to produce a successful result. All signatures need to match a public key. Because public keys are not checked again if they fail any signature comparison, signatures must be placed in the scriptSig using the same order as their corresponding public keys were placed in the scriptPubKey or redeemScript. If all signatures are valid, 1 is returned, 0 otherwise. Due to a bug, one extra unused value is removed from the stack.
const OP_CHECKMULTISIGVERIFY=175;# 0xafx sig1 sig2 ... <number of signatures> pub1 pub2 ... <number of public keys>True / FalseSame as OP_CHECKMULTISIG, but OP_VERIFY is executed afterward.
# Locktime 
#WordOpcodeHexInputOutputDescription
const OP_CHECKLOCKTIMEVERIFY=177;# 0xb1NothingNothing/ FalseThis word is ignored and does nothing until BIP65 is enforced. Marks transaction as invalid if the top stack item is greater than the transaction's nLockTime field, otherwise script evaluation continues as though an OP_NOP was executed. Transaction is also invalid if 1. the top stack item is negative; or 2. the top stack item is greater than or equal to 500000000 while the transaction's nLockTime field is less than 500000000, or vice versa; or 3. the input's nSequence field is equal to ;# 0xffffffff. The precise semantics are described in BIP 0065

#Pseudo-words 
#WordOpcodeHexDescriptionWordOpcode
const OP_PUBKEYHASH=253;# 0xfdRepresents a public key hashed with OP_HASH160.OP_PUBKEYHASH253
const OP_PUBKEY=254;# 0xfeRepresents a public key compatible with OP_CHECKSIG.OP_PUBKEY254
const OP_INVALIDOPCODE=255;# 0xffMatches any opcode that is not yet assigned.OP_INVALIDOPCODE255
# Reserved 
#words WordOpcodeHexDescription
const OP_RESERVED=80;# 0x50Transaction is invalid unless occuring in an unexecuted OP_IF branch
const OP_VER=98;# 0x62Transaction is invalid unless occuring in an unexecuted OP_IF branch
const OP_VERIF=101;# 0x65Transaction is invalid even when occuring in an unexecuted OP_IF branch
const OP_VERNOTIF=102;# 0x66Transaction is invalid even when occuring in an unexecuted OP_IF branch
const OP_RESERVED1=137;# 0x89Transaction is invalid unless occuring in an unexecuted OP_IF branch
const OP_RESERVED2=138;# 0x8aTransaction is invalid unless occuring in an unexecuted OP_IF branch
#OP_NOP1, OP_NOP3-OP_NOP10176, 178-185;# 0xb0, ;# 0xb2-;# 0xb9The word is ignored. Does not mark transaction as invalid.
}

?>