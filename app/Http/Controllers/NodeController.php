<?php

namespace App\Http\Controllers;

use App\Models\Node;
use App\Models\Relationship;
use Illuminate\Http\Request;

class NodeController extends Controller
{
    public function getRoot(){
        $rootId = Node::where('is_root', 1)->first()->id;
        return self::getNode($rootId);
    }

    public function getNode($nodeId){
        $node = Node::find($nodeId);
        $data['parentRelationships'] = Relationship::where('lhs_id', $nodeId)
            ->whereHas('relation', function($subQuery2){
                $subQuery2->where('short_name', "!=", 'syn');
            })->get();

        $data['childRelationships'] = $node->relationships->whereNotIn('relation.short_name', ['syn'])->all();
        $data['synonyms'] = $node->relationships->where('relation.short_name', 'syn')->all();
        $data['node'] = $node;

        return view('node.node', $data);
    }
}
