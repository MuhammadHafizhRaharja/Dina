<?xml version="1.0" encoding="UTF-8"?>
<bpmn:definitions xmlns:bpmn="http://www.omg.org/spec/BPMN/20100524/MODEL" xmlns:bpmndi="http://www.omg.org/spec/BPMN/20100524/DI" xmlns:dc="http://www.omg.org/spec/DD/20100524/DC" xmlns:di="http://www.omg.org/spec/DD/20100524/DI" id="Definitions_1" targetNamespace="http://bpmn.io/schema/bpmn">
  <bpmn:collaboration id="Collaboration_1h779s3" name="Proses Bisnis As-Is: Perencanaan Wisata (Sebelum DINA)">
    <bpmn:participant id="Participant_0qj099z" name="Wisatawan" processRef="Process_1" />
    <bpmn:participant id="Participant_07g229i" name="Penyedia Layanan Wisata (Hotel, Restoran, Destinasi)" />
    <bpmn:textAnnotation id="TextAnnotation_090c8s9">
      <bpmn:text>Keterangan: Proses manual, terfragmentasi, dan tidak efisien.</bpmn:text>
    </bpmn:textAnnotation>
    <bpmn:association id="Association_1p74o4p" sourceRef="TextAnnotation_090c8s9" targetRef="Participant_0qj099z" />
  </bpmn:collaboration>
  <bpmn:process id="Process_1" isExecutable="false">
    <bpmn:laneSet id="LaneSet_1">
      <bpmn:lane id="Lane_02l9h2u" name="Wisatawan">
        <bpmn:flowNodeRef>StartEvent_1</bpmn:flowNodeRef>
        <bpmn:flowNodeRef>Task_0y3d7l7</bpmn:flowNodeRef>
        <bpmn:flowNodeRef>Task_0x1z3v5</bpmn:flowNodeRef>
        <bpmn:flowNodeRef>Task_0j9f8h2</bpmn:flowNodeRef>
        <bpmn:flowNodeRef>Task_0p8k2l1</bpmn:flowNodeRef>
        <bpmn:flowNodeRef>ExclusiveGateway_1</bpmn:flowNodeRef>
        <bpmn:flowNodeRef>Task_0m1n2o3</bpmn:flowNodeRef>
        <bpmn:flowNodeRef>ExclusiveGateway_2</bpmn:flowNodeRef>
        <bpmn:flowNodeRef>Task_0k5j4i7</bpmn:flowNodeRef>
        <bpmn:flowNodeRef>EndEvent_1</bpmn:flowNodeRef>
        <bpmn:flowNodeRef>Task_1g6n4q8</bpmn:flowNodeRef>
      </bpmn:lane>
    </bpmn:laneSet>
    <bpmn:startEvent id="StartEvent_1" name="Wisatawan Ingin Berwisata">
      <bpmn:outgoing>SequenceFlow_1</bpmn:outgoing>
    </bpmn:startEvent>
    <bpmn:task id="Task_0y3d7l7" name="Mencari Info Destinasi (Google, YouTube, Medsos)">
      <bpmn:incoming>SequenceFlow_1</bpmn:incoming>
      <bpmn:outgoing>SequenceFlow_2</bpmn:outgoing>
    </bpmn:task>
    <bpmn:task id="Task_0x1z3v5" name="Memilih Layanan Terpisah (Hotel, Restoran, Destinasi)">
      <bpmn:incoming>SequenceFlow_2</bpmn:incoming>
      <bpmn:outgoing>SequenceFlow_3</bpmn:outgoing>
      <bpmn:outgoing>SequenceFlow_10</bpmn:outgoing>
    </bpmn:task>
    <bpmn:task id="Task_0j9f8h2" name="Menghubungi Masing-masing Penyedia Layanan">
      <bpmn:incoming>SequenceFlow_3</bpmn:incoming>
      <bpmn:outgoing>SequenceFlow_4</bpmn:outgoing>
    </bpmn:task>
    <bpmn:task id="0p8k2l1" name="Melakukan Reservasi/Pemesanan Manual (Telp/Email/Datang Langsung)">
      <bpmn:incoming>SequenceFlow_4</bpmn:incoming>
      <bpmn:outgoing>SequenceFlow_5</bpmn:outgoing>
    </bpmn:task>
    <bpmn:exclusiveGateway id="ExclusiveGateway_1" name="Mencari Promo?">
      <bpmn:incoming>SequenceFlow_5</bpmn:incoming>
      <bpmn:outgoing>SequenceFlow_7</bpmn:outgoing>
      <bpmn:outgoing>SequenceFlow_8</bpmn:outgoing>
    </bpmn:exclusiveGateway>
    <bpmn:task id="Task_0m1n2o3" name="Mencari &amp; Membandingkan Promo Terpisah">
      <bpmn:incoming>SequenceFlow_7</bpmn:incoming>
      <bpmn:outgoing>SequenceFlow_6</bpmn:outgoing>
    </bpmn:task>
    <bpmn:exclusiveGateway id="ExclusiveGateway_2" name="Pemesanan Selesai?">
      <bpmn:incoming>SequenceFlow_6</bpmn:incoming>
      <bpmn:incoming>SequenceFlow_8</bpmn:incoming>
      <bpmn:outgoing>SequenceFlow_9</bpmn:outgoing>
      <bpmn:outgoing>SequenceFlow_11</bpmn:outgoing>
    </bpmn:exclusiveGateway>
    <bpmn:task id="Task_0k5j4i7" name="Memproses Pembayaran (Individu dengan Tiap Penyedia)">
      <bpmn:incoming>SequenceFlow_9</bpmn:incoming>
      <bpmn:outgoing>SequenceFlow_12</bpmn:outgoing>
    </bpmn:task>
    <bpmn:endEvent id="EndEvent_1" name="Perencanaan Selesai">
      <bpmn:incoming>SequenceFlow_12</bpmn:incoming>
    </bpmn:endEvent>
    <bpmn:sequenceFlow id="SequenceFlow_1" sourceRef="StartEvent_1" targetRef="Task_0y3d7l7" />
    <bpmn:sequenceFlow id="SequenceFlow_2" sourceRef="Task_0y3d7l7" targetRef="Task_0x1z3v5" />
    <bpmn:sequenceFlow id="SequenceFlow_3" sourceRef="Task_0x1z3v5" targetRef="Task_0j9f8h2" />
    <bpmn:sequenceFlow id="SequenceFlow_4" sourceRef="Task_0j9f8h2" targetRef="0p8k2l1" />
    <bpmn:sequenceFlow id="SequenceFlow_5" sourceRef="0p8k2l1" targetRef="ExclusiveGateway_1" />
    <bpmn:sequenceFlow id="SequenceFlow_7" name="Ya" sourceRef="ExclusiveGateway_1" targetRef="Task_0m1n2o3" />
    <bpmn:sequenceFlow id="SequenceFlow_8" name="Tidak" sourceRef="ExclusiveGateway_1" targetRef="ExclusiveGateway_2" />
    <bpmn:sequenceFlow id="SequenceFlow_6" sourceRef="Task_0m1n2o3" targetRef="ExclusiveGateway_2" />
    <bpmn:sequenceFlow id="SequenceFlow_9" name="Ya" sourceRef="ExclusiveGateway_2" targetRef="Task_0k5j4i7" />
    <bpmn:sequenceFlow id="SequenceFlow_12" sourceRef="Task_0k5j4i7" targetRef="EndEvent_1" />
    <bpmn:task id="Task_1g6n4q8" name="Menghadapi Kurangnya Info Terpercaya (Ulasan/Rating)">
      <bpmn:incoming>SequenceFlow_10</bpmn:incoming>
    </bpmn:task>
    <bpmn:sequenceFlow id="SequenceFlow_10" sourceRef="Task_0x1z3v5" targetRef="Task_1g6n4q8" />
    <bpmn:sequenceFlow id="SequenceFlow_11" name="Belum" sourceRef="ExclusiveGateway_2" targetRef="Task_0j9f8h2" />
  </bpmn:process>
  <bpmndi:BPMNDiagram id="BPMNDiagram_1">
    <bpmndi:BPMNPlane id="BPMNPlane_1" bpmnElement="Collaboration_1h779s3">
      <bpmndi:BPMNShape id="Participant_0qj099z_di" bpmnElement="Participant_0qj099z" isHorizontal="true">
        <dc:Bounds x="180" y="80" width="1010" height="370" />
        <bpmndi:BPMNLabel>
          <dc:Bounds x="194.27989932407672" y="244.60947702672535" width="62.48439369941913" height="74.22591605342417" />
        </bpmndi:BPMNLabel>
      </bpmndi:BPMNShape>
      <bpmndi:BPMNShape id="Participant_07g229i_di" bpmnElement="Participant_07g229i" isHorizontal="true">
        <dc:Bounds x="180" y="450" width="1010" height="100" />
        <bpmndi:BPMNLabel>
          <dc:Bounds x="201.27989932407672" y="475.60947702672535" width="62.48439369941913" height="74.22591605342417" />
        </bpmndi:BPMNLabel>
      </bpmndi:BPMNShape>
      <bpmndi:BPMNShape id="TextAnnotation_090c8s9_di" bpmnElement="TextAnnotation_090c8s9">
        <dc:Bounds x="270" y="50" width="300" height="40" />
      </bpmndi:BPMNShape>
      <bpmndi:BPMNShape id="_BPMNShape_StartEvent_2" bpmnElement="StartEvent_1">
        <dc:Bounds x="270" y="142" width="36" height="36" />
        <bpmndi:BPMNLabel>
          <dc:Bounds x="250" y="185" width="76" height="27" />
        </bpmndi:BPMNLabel>
      </bpmndi:BPMNShape>
      <bpmndi:BPMNShape id="Task_0y3d7l7_di" bpmnElement="Task_0y3d7l7">
        <dc:Bounds x="350" y="120" width="100" height="80" />
      </bpmndi:BPMNShape>
      <bpmndi:BPMNShape id="Task_0x1z3v5_di" bpmnElement="Task_0x1z3v5">
        <dc:Bounds x="480" y="120" width="100" height="80" />
      </bpmndi:BPMNShape>
      <bpmndi:BPMNShape id="Task_0j9f8h2_di" bpmnElement="Task_0j9f8h2">
        <dc:Bounds x="610" y="120" width="100" height="80" />
      </bpmndi:BPMNShape>
      <bpmndi:BPMNShape id="Task_0p8k2l1_di" bpmnElement="0p8k2l1">
        <dc:Bounds x="740" y="120" width="100" height="80" />
      </bpmndi:BPMNShape>
      <bpmndi:BPMNShape id="ExclusiveGateway_1_di" bpmnElement="ExclusiveGateway_1" isMarkerVisible="true">
        <dc:Bounds x="875" y="135" width="50" height="50" />
        <bpmndi:BPMNLabel>
          <dc:Bounds x="866" y="192" width="68" height="14" />
        </bpmndi:BPMNLabel>
      </bpmndi:BPMNShape>
      <bpmndi:BPMNShape id="Task_0m1n2o3_di" bpmnElement="Task_0m1n2o3">
        <dc:Bounds x="850" y="240" width="100" height="80" />
      </bpmndi:BPMNShape>
      <bpmndi:BPMNShape id="ExclusiveGateway_2_di" bpmnElement="ExclusiveGateway_2" isMarkerVisible="true">
        <dc:Bounds x="985" y="255" width="50" height="50" />
        <bpmndi:BPMNLabel>
          <dc:Bounds x="965" y="312" width="90" height="14" />
        </bpmndi:BPMNLabel>
      </bpmndi:BPMNShape>
      <bpmndi:BPMNShape id="Task_0k5j4i7_di" bpmnElement="Task_0k5j4i7">
        <dc:Bounds x="980" y="120" width="100" height="80" />
      </bpmndi:BPMNShape>
      <bpmndi:BPMNShape id="EndEvent_1_di" bpmnElement="EndEvent_1">
        <dc:Bounds x="1120" y="142" width="36" height="36" />
        <bpmndi:BPMNLabel>
          <dc:Bounds x="1098" y="185" width="80" height="14" />
        </bpmndi:BPMNLabel>
      </bpmndi:BPMNShape>
      <bpmndi:BPMNShape id="Task_1g6n4q8_di" bpmnElement="Task_1g6n4q8">
        <dc:Bounds x="480" y="240" width="100" height="80" />
      </bpmndi:BPMNShape>
      <bpmndi:BPMNEdge id="SequenceFlow_1_di" bpmnElement="SequenceFlow_1">
        <di:waypoint x="306" y="160" />
        <di:waypoint x="350" y="160" />
      </bpmndi:BPMNEdge>
      <bpmndi:BPMNEdge id="SequenceFlow_2_di" bpmnElement="SequenceFlow_2">
        <di:waypoint x="450" y="160" />
        <di:waypoint x="480" y="160" />
      </bpmndi:BPMNEdge>
      <bpmndi:BPMNEdge id="SequenceFlow_3_di" bpmnElement="SequenceFlow_3">
        <di:waypoint x="580" y="160" />
        <di:waypoint x="610" y="160" />
      </bpmndi:BPMNEdge>
      <bpmndi:BPMNEdge id="SequenceFlow_4_di" bpmnElement="SequenceFlow_4">
        <di:waypoint x="710" y="160" />
        <di:waypoint x="740" y="160" />
      </bpmndi:BPMNEdge>
      <bpmndi:BPMNEdge id="SequenceFlow_5_di" bpmnElement="SequenceFlow_5">
        <di:waypoint x="840" y="160" />
        <di:waypoint x="875" y="160" />
      </bpmndi:BPMNEdge>
      <bpmndi:BPMNEdge id="SequenceFlow_7_di" bpmnElement="SequenceFlow_7">
        <di:waypoint x="900" y="185" />
        <di:waypoint x="900" y="240" />
        <bpmndi:BPMNLabel>
          <dc:Bounds x="909" y="202" width="13" height="14" />
        </bpmndi:BPMNLabel>
      </bpmndi:BPMNEdge>
      <bpmndi:BPMNEdge id="SequenceFlow_8_di" bpmnElement="SequenceFlow_8">
        <di:waypoint x="925" y="160" />
        <di:waypoint x="1010" y="160" />
        <di:waypoint x="1010" y="255" />
        <bpmndi:BPMNLabel>
          <dc:Bounds x="946" y="143" width="24" height="14" />
        </bpmndi:BPMNLabel>
      </bpmndi:BPMNEdge>
      <bpmndi:BPMNEdge id="SequenceFlow_6_di" bpmnElement="SequenceFlow_6">
        <di:waypoint x="900" y="320" />
        <di:waypoint x="900" y="280" />
        <di:waypoint x="985" y="280" />
      </bpmndi:BPMNEdge>
      <bpmndi:BPMNEdge id="SequenceFlow_9_di" bpmnElement="SequenceFlow_9">
        <di:waypoint x="1035" y="280" />
        <di:waypoint x="1080" y="280" />
        <di:waypoint x="1080" y="200" />
        <bpmndi:BPMNLabel>
          <dc:Bounds x="1044" y="283" width="13" height="14" />
        </bpmndi:BPMNLabel>
      </bpmndi:BPMNEdge>
      <bpmndi:BPMNEdge id="SequenceFlow_12_di" bpmnElement="SequenceFlow_12">
        <di:waypoint x="1080" y="160" />
        <di:waypoint x="1120" y="160" />
      </bpmndi:BPMNEdge>
      <bpmndi:BPMNEdge id="SequenceFlow_10_di" bpmnElement="SequenceFlow_10">
        <di:waypoint x="530" y="200" />
        <di:waypoint x="530" y="240" />
      </bpmndi:BPMNEdge>
      <bpmndi:BPMNEdge id="SequenceFlow_11_di" bpmnElement="SequenceFlow_11">
        <di:waypoint x="1010" y="255" />
        <di:waypoint x="1010" y="230" />
        <di:waypoint x="710" y="230" />
        <di:waypoint x="710" y="200" />
        <bpmndi:BPMNLabel>
          <dc:Bounds x="996" y="237" width="29" height="14" />
        </bpmndi:BPMNLabel>
      </bpmndi:BPMNEdge>
    </bpmndi:BPMNPlane>
  </bpmndi:BPMNDiagram>
</bpmn:definitions>