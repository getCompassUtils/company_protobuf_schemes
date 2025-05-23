<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/go_sender.proto

namespace GPBMetadata\Proto;

class GoSender
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�5
proto/go_sender.proto
senderGrpc"�
SenderSetTokenRequestStruct
token (	
platform (	
	device_id (	
user_id (
expire (

company_id (",
SenderSetTokenResponseStruct
node ("N
EventUserStruct
user_id (
need_force_push (
	need_push ("N
SenderSetConfigRequestStruct
key (	
value (

company_id ("
SenderSetConfigResponseStruct"A
SenderClearConfigRequestStruct
key (	

company_id ("!
SenderClearConfigResponseStruct"1
EventVersionItem
version (
data ("�
SenderSendEventRequestStruct.
	user_list (2.senderGrpc.EventUserStruct
event (	8
event_version_list (2.senderGrpc.EventVersionItem
	push_data (	
ws_users (	
uuid (	
routine_key (	

company_id (
channel	 (	"
SenderSendEventResponseStruct"x
$SenderSendEventBatchingRequestStruct<

event_list (2(.senderGrpc.SenderSendEventRequestStruct

company_id ("\'
%SenderSendEventBatchingResponseStruct"�
!SenderSendEventToAllRequestStruct
event (	8
event_version_list (2.senderGrpc.EventVersionItem
	push_data (	
ws_users (	
uuid (	
routine_key (	
is_need_push (

company_id (
channel	 (	
exclude_user_id_list
 ("$
"SenderSendEventToAllResponseStruct"V
/SenderGetOnlineConnectionsByUserIdRequestStruct
user_id (

company_id ("�
ConnectionInfoStruct
sender_node_id (
connection_id (
user_id (

ip_address (	
connected_at (

user_agent (	
platform (	

is_focused (
channel	 (	"t
0SenderGetOnlineConnectionsByUserIdResponseStruct@
online_connection_list (2 .senderGrpc.ConnectionInfoStruct"R
+SenderCloseConnectionsByUserIdRequestStruct
user_id (

company_id (".
,SenderCloseConnectionsByUserIdResponseStruct"o
3SenderCloseConnectionsByUserIdWithWaitRequestStruct
user_id (
routine_key (	

company_id ("6
4SenderCloseConnectionsByUserIdWithWaitResponseStruct"�
5SenderCloseConnectionsByDeviceIdWithWaitRequestStruct
user_id (
	device_id (	
routine_key (	

company_id ("8
6SenderCloseConnectionsByDeviceIdWithWaitResponseStruct"t
*SenderAddTaskPushNotificationRequestStruct
	user_list (
	push_data (	
uuid (	

company_id ("-
+SenderAddTaskPushNotificationResponseStruct"J
!SenderGetOnlineUsersRequestStruct
	user_list (

company_id ("Y
"SenderGetOnlineUsersResponseStruct
online_user_list (
offline_user_list ("�
#SenderAddUsersToThreadRequestStruct

thread_key (	
	user_list (
routine_key (	

company_id (
channel (	"&
$SenderAddUsersToThreadResponseStruct"�
"SenderSendTypingEventRequestStruct
	user_list (
event (	8
event_version_list (2.senderGrpc.EventVersionItem
routine_key (	

company_id (
channel (	"%
#SenderSendTypingEventResponseStruct"�
SenderSendVoIPRequestStruct
user_id (
	push_data (	
uuid (	
time_to_live (
routine_key (	

company_id ("
SenderSendVoIPResponseStruct"N
\'ClearUserNotificationCacheRequestStruct
user_id (

company_id ("*
(ClearUserNotificationCacheResponseStruct"�
#SenderSendIncomingCallRequestStruct
user_id (8
event_version_list (2.senderGrpc.EventVersionItem
	push_data (	
ws_users (	
uuid (	
time_to_live (
routine_key (	

company_id (
channel	 (	"&
$SenderSendIncomingCallResponseStruct"T
-SenderClearUserNotificationCacheRequestStruct
user_id (

company_id ("0
.SenderClearUserNotificationCacheResponseStruct"
SystemStatusRequestStruct"�
SystemStatusResponseStruct
name (	

goroutines (
memory (
	memory_kb (	
	memory_mb (	
uptime ("#
!SystemTraceGoroutineRequestStruct"$
"SystemTraceGoroutineResponseStruct" 
SystemTraceMemoryRequestStruct"!
SystemTraceMemoryResponseStruct"-
SystemCpuProfileRequestStruct
time (" 
SystemCpuProfileResponseStruct2�
sendere
SenderSetToken\'.senderGrpc.SenderSetTokenRequestStruct(.senderGrpc.SenderSetTokenResponseStruct" h
SenderSetConfig(.senderGrpc.SenderSetConfigRequestStruct).senderGrpc.SenderSetConfigResponseStruct" n
SenderClearConfig*.senderGrpc.SenderClearConfigRequestStruct+.senderGrpc.SenderClearConfigResponseStruct" h
SenderSendEvent(.senderGrpc.SenderSendEventRequestStruct).senderGrpc.SenderSendEventResponseStruct" w
SenderSendEventToAll-.senderGrpc.SenderSendEventToAllRequestStruct..senderGrpc.SenderSendEventToAllResponseStruct" �
"SenderGetOnlineConnectionsByUserId;.senderGrpc.SenderGetOnlineConnectionsByUserIdRequestStruct<.senderGrpc.SenderGetOnlineConnectionsByUserIdResponseStruct" �
SenderCloseConnectionsByUserId7.senderGrpc.SenderCloseConnectionsByUserIdRequestStruct8.senderGrpc.SenderCloseConnectionsByUserIdResponseStruct" �
&SenderCloseConnectionsByUserIdWithWait?.senderGrpc.SenderCloseConnectionsByUserIdWithWaitRequestStruct@.senderGrpc.SenderCloseConnectionsByUserIdWithWaitResponseStruct" �
(SenderCloseConnectionsByDeviceIdWithWaitA.senderGrpc.SenderCloseConnectionsByDeviceIdWithWaitRequestStructB.senderGrpc.SenderCloseConnectionsByDeviceIdWithWaitResponseStruct" �
SenderAddTaskPushNotification6.senderGrpc.SenderAddTaskPushNotificationRequestStruct7.senderGrpc.SenderAddTaskPushNotificationResponseStruct" w
SenderGetOnlineUsers-.senderGrpc.SenderGetOnlineUsersRequestStruct..senderGrpc.SenderGetOnlineUsersResponseStruct" }
SenderAddUsersToThread/.senderGrpc.SenderAddUsersToThreadRequestStruct0.senderGrpc.SenderAddUsersToThreadResponseStruct" z
SenderSendTypingEvent..senderGrpc.SenderSendTypingEventRequestStruct/.senderGrpc.SenderSendTypingEventResponseStruct" e
SenderSendVoIP\'.senderGrpc.SenderSendVoIPRequestStruct(.senderGrpc.SenderSendVoIPResponseStruct" }
SenderSendIncomingCall/.senderGrpc.SenderSendIncomingCallRequestStruct0.senderGrpc.SenderSendIncomingCallResponseStruct" �
ClearUserNotificationCache3.senderGrpc.ClearUserNotificationCacheRequestStruct4.senderGrpc.ClearUserNotificationCacheResponseStruct" _
SystemStatus%.senderGrpc.SystemStatusRequestStruct&.senderGrpc.SystemStatusResponseStruct" w
SystemTraceGoroutine-.senderGrpc.SystemTraceGoroutineRequestStruct..senderGrpc.SystemTraceGoroutineResponseStruct" n
SystemTraceMemory*.senderGrpc.SystemTraceMemoryRequestStruct+.senderGrpc.SystemTraceMemoryResponseStruct" k
SystemCpuProfile).senderGrpc.SystemCpuProfileRequestStruct*.senderGrpc.SystemCpuProfileResponseStruct" �
SenderSendEventBatching0.senderGrpc.SenderSendEventBatchingRequestStruct1.senderGrpc.SenderSendEventBatchingResponseStruct" B	Z/senderbproto3'
        , true);

        static::$is_initialized = true;
    }
}

